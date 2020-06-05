Simple Video Gallery Using PHP and MySQL

Simple video gallery is an online video gallery project which aims to anyone can upload, edit and delete their videos.
The original html template is taken from colorlib and customize the page accordingly for front -end interface.
There are two entities associated with this: Users and Product. Users contains following informations:
firstname, lastname, email, address and gender. Product basically contains information about videos:
name of video, url of video, category/type of video, name of video, description, published date and number of views.

Following are the variables used to delineate the entity.
# database name: gitvideogallery
#table name: user and videos
#user
  id: ID
  firstname
  lastname
  password
  address
  suburb
  zipcode
  gender
#videos
  id: ID of upload videos
  name: name of videos
  video_url: url of video to be uploaded
  category: category of videos e.g. nature, animals etc.
  description: description of the video contents
  user_id: login details of user who has uploaded their videos
  count_videos: number of views of vidoes
  publish_date: video published date
