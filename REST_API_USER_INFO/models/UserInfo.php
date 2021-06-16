<?php
/**
 * @OA\Info(title="SkiVi User Information Api", version="0.1")
 */
class UserInfo{
    private $conn;
    private $table='user_info'; // set din input

    //post properties;
    public $user_id;
    public $skill;
    public $course;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }
    
    /**
     * @OA\Post(path="/REST_API_USER_INFO/api/post.php", tags={"User Information"},
     * @OA\RequestBody(
     *      @OA\MediaType(
     *          mediaType="json",
     *          @OA\Schema(required={"user_id","skill","course"},
     *              @OA\Property(property = "user_id", type="integer"), 
     *              @OA\Property(property = "skill", type="string", example="first_aid"), 
     *              @OA\Property(property = "course", type="string", example="introduction")
     *          )
     *      )
     * ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    //add skill->course
    public function addDone(){
        //create query
        $query='INSERT INTO '. $this->table . ' SET user_id=:user_id , skill=:skill , course=:course';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->skill=htmlspecialchars(strip_tags($this->skill));
        $this->course=htmlspecialchars(strip_tags($this->course));

        // bind values
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":skill", $this->skill);
        $stmt->bindParam(":course", $this->course);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    /**
     * @OA\Delete(path="/REST_API_USER_INFO/api/delete.php?course={course}&skill={skill}", tags={"User Information"},
     *  @OA\Parameter(
     *         description="Title of the course",
     *         in="path",
     *         name="course",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *  @OA\Parameter(
     *         description="Title of the skill",
     *         in="path",
     *         name="skill",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function delete(){
        // delete query
        $query = "DELETE FROM " . $this->table . " WHERE course =:course and skill = :skill";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->course=htmlspecialchars(strip_tags($this->course));
        $this->skill=htmlspecialchars(strip_tags($this->skill));

        // bind id of record to delete
        $stmt->bindParam(":course", $this->course);
        $stmt->bindParam(":skill", $this->skill);

        // execute query
        if($stmt->execute()){
            return true;
        }

        return false;

    }

    /**
     * @OA\Get(path="/REST_API_USER_INFO/api/getCoursesBySkill.php?id={id}&skill={skill}", tags={"User Information"},
     *  @OA\Parameter(
     *         description="Id of a user",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     * @OA\Parameter(
     *         description="Skill name",
     *         in="path",
     *         name="skill",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function getCoursesBySkill(){
        // select query
        $query = "SELECT * FROM " . $this->table . " WHERE user_id = :user_id and skill = :skill";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->skill=htmlspecialchars(strip_tags($this->skill));

        // bind id of record to select
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":skill", $this->skill);

        // execute query
        $stmt->execute();

        return $stmt;
       
    }

    /**
     * @OA\Get(path="/REST_API_USER_INFO/api/getNoCourses.php?id={id}&skill={skill}", tags={"User Information"},
     *  @OA\Parameter(
     *         description="Id of a user",
     *         in="path",
     *         name="id",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     * @OA\Parameter(
     *         description="Skill name",
     *         in="path",
     *         name="skill",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function getNoCoursesBySkill(){
        // select query
        $query = "SELECT * FROM " . $this->table . " WHERE user_id = :user_id and skill = :skill";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->skill=htmlspecialchars(strip_tags($this->skill));

        // bind id of record to select
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":skill", $this->skill);

        // execute query
        $stmt->execute();
        
        return $stmt->rowCount();

    }
}
