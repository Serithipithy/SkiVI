<?php
/**
 * @OA\Info(title="SkiVi Origami Api", version="0.1")
 */
class Origami{
    private $conn;
    private $table='courses'; // set din input

    //post properties;
    public $title;
    public $link;
    public $text;

    //constructor with DB
    public function __construct($db){
        $this->conn=$db;
    }
    /**
     * @OA\Post(path="/REST_API_ORIGAMI/api/post.php",summary="Adds a course to the database", tags={"Origami"},
     * @OA\RequestBody(
     *      @OA\MediaType(
     *          mediaType="json",
     *          @OA\Schema(required={"title"}, 
     *              @OA\Property(property = "title", type="string"), 
     *              @OA\Property(property = "link", type="string", example="<iframe width='560' height='315' src='ttps://www.youtube.com/embed/hwMM0av44fY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"),
     *              @OA\Property(property = "text", type="string")
     *          )
     *      )
     * ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */
    //create new course method
    public function createCourse(){

        //create query
        $query='INSERT INTO '. $this->table . ' SET title=:title , link=:link , text=:text';
        
        // prepare statement
        $stmt=$this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->text=htmlspecialchars(strip_tags($this->text));

        // bind values
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":link", $this->link);
        $stmt->bindParam(":text", $this->text);


        //execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    /**
     * @OA\Put(path="/REST_API_ORIGAMI/api/put.php",summary="Updates the link or the text of a course", tags={"Origami"},
     * @OA\RequestBody(
     *      @OA\MediaType(
     *          mediaType="json",
     *          @OA\Schema(required={"title"}, 
     *              @OA\Property(property = "title", type="string"), 
     *              @OA\Property(property = "link", type="string", example="<iframe width='560' height='315' src='https://www.youtube.com/embed/hwMM0av44fY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"),
     *              @OA\Property(property = "text", type="string")
     *          )
     *      )
     * ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function updateCourse(){
        //create query
        $query='UPDATE ' . $this->table . ' SET link=:link, text=:text WHERE title=:title'; 

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->link=htmlspecialchars(strip_tags($this->link));
        $this->text=htmlspecialchars(strip_tags($this->text));

        // bind values
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':link', $this->link);
        $stmt->bindParam(':text', $this->text);

        //execute query
        if($stmt->execute()){
            return true;
        }

        return false;
    }

    /**
     * @OA\Get(path="/REST_API_ORIGAMI/api/get.php",summary="Returns all the courses", tags={"Origami"},
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function getCourses(){
        //create query
        $query='SELECT title, link, text  FROM courses ORDER BY data ASC';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        //execute query
        $stmt->execute();

        return $stmt;
    }


    /**
     * @OA\Get(path="/REST_API_ORIGAMI/api/get_single.php?title={title}",summary="Returns the course with the given title", tags={"Origami"},
     * @OA\Parameter(
     *         description="Title of a course",
     *         in="path",
     *         name="title",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function getSingleCourse(){
        //create query
        $query='SELECT *  FROM courses WHERE title=:title';

        // prepare statement
        $stmt=$this->conn->prepare($query);

        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
       
        // bind values
        $stmt->bindParam(':title', $this->title);
        
        //execute query
        $stmt->execute();

        return $stmt;
    }

    /**
     * @OA\Delete(path="/REST_API_ORIGAMI/api/delete.php?title={title}",summary="Deletes a course", tags={"Origami"},
     *  @OA\Parameter(
     *         description="Title of the course",
     *         in="path",
     *         name="title",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     * @OA\Response (response="200", description="Succes"),
     * @OA\Response (response="404", description="Not Found")
     * )
     */

    public function delete(){
        // delete query
        $query = "DELETE FROM " . $this->table . " WHERE title = ?";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // sanitize
        $this->title=htmlspecialchars(strip_tags($this->title));
    
        // bind id of record to delete
        $stmt->bindParam(1, $this->title);
    
        // execute query
        if($stmt->execute()){
            return true;
        }
    
        return false;
        }

}