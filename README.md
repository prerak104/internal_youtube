internal_youtube
================
login.php : Main page where users enter their user id and passwords.
welcome1.php: Users redirected to this page after login.
admin1.php : Admin redirected to this page for uploading data and writing names of users having access to the file.
uploaded_file1.php: Admin uploads his file and sees its content.
get.php :Page to convert image data to jpeg.
config.php: Connects to the database internal_youtube.

Method by which the project works:

There are two tables created using mySQL:
1. table2 : Contains columns:

  user        pass
  
2. table5 : Contains Columns:


  id          image         access(contains list of usernames having access to the file)
  
  

When a user logs in, the 'id' of the images to which he has access to is passed to get.php which takes the image data as
input and converts it to 'jpeg' format and the images are displayed on the user's page when he logs in.
