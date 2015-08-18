$.ajax({
url: 'http://corp.healthline.com/wp-json/posts',
type: 'GET',
success: function(data){
for(var i = 0; i < 7; i++) {
  $('.post-title').html(data[i].title);
}
}
});

