<?php

include('../config.php');
$emails = $_SESSION['email'];

if(!isset($emails)){
   header('location:../userarea/userlogin.php');
};

if(isset($_GET['logout'])){
   unset($emails);
   session_destroy();
   header('location:../userarea/userlogin.php');
}

?>


 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style>
.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}

 html * {
           font-family: "Audiowide", sans-serif;
           
      }
body {
 background: #DCE35B; 
background: -webkit-linear-gradient(to right, #45B649, #DCE35B); 
background: linear-gradient(to right, #45B649, #DCE35B); 
}
.ag-courses_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;

  padding: 45px 0;


   display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 50vh;
  
}
a:link {
  text-decoration: none;
}
.ag-courses_item {
  -ms-flex-preferred-size: calc(33.33333% - 30px);
  flex-basis: calc(33.33333% - 30px);

  margin: 0 15px 30px;

  overflow: hidden;

  border-radius: 28px;
}
.ag-courses-item_link {
  display: block;
  padding: 30px 20px;
  background-color: #121212;

  overflow: hidden;

  position: relative;
}
.ag-courses-item_link:hover,
.ag-courses-item_link:hover .ag-courses-item_date {
  text-decoration: none;
  color: #FFF;
}
.ag-courses-item_link:hover .ag-courses-item_bg {
  -webkit-transform: scale(10);
  -ms-transform: scale(10);
  transform: scale(10);
}
.ag-courses-item_title {
  min-height: 87px;
  margin: 0 0 25px;

  overflow: hidden;

  font-weight: bold;
  font-size: 30px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date-box {
  font-size: 18px;
  color: #FFF;

  z-index: 2;
  position: relative;
}
.ag-courses-item_date {
  font-weight: bold;
  color: #f9b234;

  -webkit-transition: color .5s ease;
  -o-transition: color .5s ease;
  transition: color .5s ease
}
.ag-courses-item_bg {
  height: 128px;
  width: 128px;
  background-color: #f9b234;

  z-index: 1;
  position: absolute;
  top: -75px;
  right: -75px;

  border-radius: 50%;

  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}
.ag-courses_item:nth-child(2n) .ag-courses-item_bg {
  background-color: #3ecd5e;
}
.ag-courses_item:nth-child(3n) .ag-courses-item_bg {
  background-color: #e44002;
}
.ag-courses_item:nth-child(4n) .ag-courses-item_bg {
  background-color: #952aff;
}
.ag-courses_item:nth-child(5n) .ag-courses-item_bg {
  background-color: #cd3e94;
}
.ag-courses_item:nth-child(6n) .ag-courses-item_bg {
  background-color: #4c49ea;
}



@media only screen and (max-width: 979px) {
  .ag-courses_item {
    -ms-flex-preferred-size: calc(50% - 30px);
    flex-basis: calc(50% - 30px);
  }
  .ag-courses-item_title {
    font-size: 24px;
  }
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}
@media only screen and (max-width: 639px) {
  .ag-courses_item {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
  }
  .ag-courses-item_title {
    min-height: 72px;
    line-height: 1;

    font-size: 24px;
  }
  .ag-courses-item_link {
    padding: 22px 40px;
  }
  .ag-courses-item_date-box {
    font-size: 16px;
  }
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
<a href="../userarea/logout.php">Logout</a>
</div>

<div class="ag-format-container">
  <div class="ag-courses_box">
    <!--<div class="ag-courses_item">-->
    <!--  <a href="../newsupload.php" class="ag-courses-item_link">-->
    <!--    <div class="ag-courses-item_bg"></div>-->

    <!--    <div class="ag-courses-item_title">-->
    <!--      UPLOAD NEWS-->
    <!--    </div>-->

    <!--    <div class="ag-courses-item_date-box">-->
    <!--      Discription:-->
    <!--      <span class="ag-courses-item_date">-->
    <!--        Upload Latest News-->
    <!--      </span>-->
    <!--    </div>-->
    <!--  </a>-->
    <!--</div>-->
     <div class="ag-courses_item">
      <a href="../upload_circular.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Circular
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Circulars
          </span>
        </div>
      </a>
    </div>
    
    
     <div class="ag-courses_item">
      <a href="../add_semester.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Add Semester
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Semesters
          </span>
        </div>
      </a>
    </div>
    
 <div class="ag-courses_item">
      <a href="../add_subject.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Add Subjects
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            subjects
          </span>
        </div>
      </a>
    </div>
    
    <div class="ag-courses_item">
      <a href="../upload_note.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Notes
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Notes
          </span>
        </div>
      </a>
    </div>
    
     <div class="ag-courses_item">
      <a href="../upload_assignment.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Assigments
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            assignments
          </span>
        </div>
      </a>
    </div>

 <div class="ag-courses_item">
      <a href="../upload_previous_year_paper.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Previous Year Papers
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Previous Year Papers
          </span>
        </div>
      </a>
    </div>
    
     
 <div class="ag-courses_item">
      <a href="../upload_lab_note.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Lab Notes
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Lab Notes
          </span>
        </div>
      </a>
    </div>


    <div class="ag-courses_item">
      <a href="../thumbnailupload.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD FILES
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            Files
          </span>
        </div>
      </a>
    </div>

    
    <div class="ag-courses_item">
      <a href="../materialupload.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD Materials
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
             Study Materials
          </span>
        </div>
      </a>
    </div>
    
       <div class="ag-courses_item">
      <a href="../upload_project.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          Upload Project
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
            projects
          </span>
        </div>
      </a>
    </div>
    
     <div class="ag-courses_item">
      <a href="../videos/admin.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD Videos
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
             Video Gallery
          </span>
        </div>
      </a>
    </div>

  
    <div class="ag-courses_item">
      <a href="../question_bank/admin.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD Question Banks
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
             Quantams and KPH
          </span>
        </div>
      </a>
    </div>

 <div class="ag-courses_item">
      <a href="../ebooks/admin.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD E-Books
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
             E-Books
          </span>
        </div>
      </a>
    </div>

    <div class="ag-courses_item">
      <a href="../blog/blogupload.php" class="ag-courses-item_link">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
          UPLOAD Blogs
        </div>

        <div class="ag-courses-item_date-box">
          Discription:
          <span class="ag-courses-item_date">
             Featured Blogs
          </span>
        </div>
      </a>
    </div>

    
</div>
</body>
</html>