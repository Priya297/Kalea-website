var $ = jQuery.noConflict();
var paged = 1;
$(document).ready(function () {


	// Custom Taxonomy Categories  Wise Filter
	$('.blog-fil').click(function(){
		var term_id = $(this).data('term_id');
		$('ul li').removeClass('active');
		$(this).parent().addClass('active');	
		//alert(term_id);
		$.ajax({
			datatype: 'JSON',
			url: object_name.ajax_url,
			type: 'post',
			data: {
				'action': 'blog_categories_filter',
				'term_id': term_id,
			},
			success: function (response) {
				$('.blog-filter-result .row').html(response.data.loaded_content);
			},
		});
	});

// Custom Taxonomy Categories  Wise Filter
	$('.cat-filter').click(function(){
		var term_id = $(this).data('term_id');
		var term_slug = $(this).data('term_slug');
		$('ul li').removeClass('active');
		var parent_id = $(this).data('parent_id');
		var parent_slug = $(this).data('parent_slug');
		$(this).parent().addClass('active');	
		//alert(term_id);
		$.ajax({
			datatype: 'JSON',
			url: object_name.ajax_url,
			type: 'post',
			data: {
				'action': 'behandelingen_categories_filter',
				'term_id': term_id,
				'term_slug':term_slug,
				'parent_slug': parent_slug,
				'parent_id' : parent_id
			},
			success: function (response) {
				$('.content-right-result').html(response.data.loaded_content);
			},
		});
	});

	// All Vategory filter
	$('.all-filter').click(function(){
		var term_id = $(this).data('term_id');
		var term_slug = $(this).data('term_slug');
		$('ul li').removeClass('active');
		$(this).parent().addClass('active');	
		//alert(term_id);
		$.ajax({
			datatype: 'JSON',
			url: object_name.ajax_url,
			type: 'post',
			data: {
				'action': 'all_categories_filter',
				//'term_id': term_id,

			},
			success: function (response) {
				$('.content-right-result').html(response.data.loaded_content);
			},
		});
	});


	
});