$(document).ready(function(){
	//发表文章，保存草稿
	$('#postBlog').click(function(){
		addBlog(1)
	})

	$('#saveBlog').click(function(){
		addBlog(0)
	})

	function addBlog(post){
		var url = $('#blogPostForm').attr('idAttr')
		var subject = $('#subject').val()
		var data = CKEDITOR.instances.ckeditor.getData()
		var state = post?post:0
		$.post(
			$('#blogPostForm').attr('idAttr'),
			{subject: subject, content: data, state: state, formActionType: "postBlog"},
			function(responce){
				if(responce.code == 1){
					window.location.href = responce.url
				}else{
					console.log(responce)
				}
			}
		)
	}
})
