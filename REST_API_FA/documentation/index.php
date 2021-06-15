<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="./swagger/swagger-ui.css" />
    <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>
    <div id="swagger-ui2"></div>
    <div id="swagger-ui3"></div>
    <div id="swagger-ui4"></div>

    <script src="./swagger/swagger-ui-bundle.js" charset="UTF-8"> </script>
    <script src="./swagger/swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
      const ui = SwaggerUIBundle({
        url: "http://localhost:8000/REST_API_FA/documentation/api.php",
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
        layout: "StandaloneLayout"
      });
      // End Swagger UI call region

      // Begin Swagger UI call region
      const ui2 = SwaggerUIBundle({
        url: "http://localhost:8000/REST_API_ORIGAMI/documentation/api.php",
        dom_id: '#swagger-ui2',
        deepLinking: true,
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
      });
      // End Swagger UI call region


      // Begin Swagger UI call region
      const ui3 = SwaggerUIBundle({
        url: "http://localhost:8000/REST_API_SIGN_LNG/documentation/api.php",
        dom_id: '#swagger-ui3',
        deepLinking: true,
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
      });
      // End Swagger UI call region

        // Begin Swagger UI call region
        const ui4 = SwaggerUIBundle({
        url: "http://localhost:8000/REST_API_USER_INFO/documentation/api.php",
        dom_id: '#swagger-ui4',
        deepLinking: true,
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
      });
      // End Swagger UI call region


      window.ui = ui;
      window.ui2 = ui2;
      window.ui3 = ui3;
      window.ui4 = ui4;
    };
  </script>  
  </body>
</html>
