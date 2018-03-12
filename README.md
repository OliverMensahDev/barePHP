
# barePHP
    A mirocframework for building web application with PHP. barePHP focuses on MVC architectural pattern, 
    you-arent-gonna-need-it [YAGNI](https://en.wikipedia.org/wiki/You_aren%27t_gonna_need_it) principle, 
    design patterns like Registry to provide beginner friendly minimal approach to building PHP web application.

# Structure
    application folder - is where the whole framework files are created 
    public folder - will host all static files like images, css, js, etc.

# Important Constants 
    URLROOT  : helps to create dyanmic links to pages, images, css, js files.
  ```
    <script src="<?php echo URLROOT;?>/js/main.js"></script>
  ```


    APPROOT  : Helps to include other php files in our pages.It is used in place of PHP require/include.
  ```
   <?php require APPROOT. '/views/inc/header.php';?>
   ```
  
# How to Use  barePHP
    1. Rename RewriteBase in public/.htacccess 
    if the folder that contains this framework files is named goodApp then the RewriteBase will be /goodApp/public 
    if your are putting this in a server without any folder to contain the files then it should just be /public

    2. Rename Database info in the config/config,php to suit the information about your database
    ```
    define("DB_HOST", 'YOUR SERVER HOST');
    define("DB_USER", 'YOUR USERNAME TO DATABASE');
    define("DB_PASS", 'YOUR PASSWORD TO DATABASE');
    define("DB_NAME", 'YOUR DATABASE NAME');
  ```
3. Rename URLROOT and SITE NAME
    ```
     define("URLROOT", "YOUR BASE URL");
    ```
     if you have a folder to hold the framework files then the base url will be http://hostname/folder such as 
     http://localhost/goodApp.
     if you are just hosting on your domain without creating any folder to hold the files then http://domainName
    //site name 
    define("SITENAME", "YOUR SITE NAME");
4. Creating Models
    The model class you will create mostly communicate with a data source and  here we are using mysql database.
    The  class has an property of a database which is instantiated in the models' constructor. This makes it easier to use the methods of the database in our model class. 
    The methods of the database are:
        a) query = make a query to the database using PDO
        b) bind =  binds value of passed parameters 
        b) resultSet = returns an array of objects from the query
        c) single = returns a single object from the query
        d) rowCount = returns the number of rows affected by a query
    Example. 
    ```
    class Post{
        private $db;
        public function __construct(){
            $this-> db = new Database;
        }

        public function getPosts(){
            $this->db->query("SELECT * FROM table");
            $this->db->resultSet();
        }
    }
    ```
5. Creating  Controllers 
    Controller brings together a model and and a view. The controller extends to a base controller called Controler which makes it easier to use its methods to work with views and models.
   ```
    <?php 
    class Posts extends Controller{
        public function __construct(){
            //load model as  $this->postModel = $this->loadModel("Name of Model") 
            $this->postModel = $this->loadModel("Post")
        }
        public function index(){
            $post = $this->postModel->getPosts();
            $data = [
                "title =>  "Posts",
                "posts" => $post
            ]
            $this->loadView('pages/index', $post);
        }
    }
    ```
    6. Working with Views. 
    With the views, I have a created inc folder that holds all header and footer contents for your pages. You can choose to use it.

    Example  showing how to use data from our controller in our view.
    ```
    <?php require APPROOT. '/views/inc/header.php';?>
    <h1><?php echo $data['title']; ?></h1>
    <?php foreach($data['posts'] as $post: ?></h1>
        <li><h1><?php echo $post->DaTabase Table Name; ?></h1></li>
    <?php endforeach; ?>    
    <?php require APPROOT. '/views/inc/footer.php';?>
    ```
    


