// To make column equal height
jQuery('#footer-widgets').each(function(){
  // Cache the highest
  var highestBox = 0;
  
  // Select and loop the elements you want to equalise
  jQuery('.recent-posts-extended-text-wrap', this).each(function(){
    // If this box is higher than the cached highest then store it
    if(jQuery(this).height() > highestBox) {
      highestBox = jQuery(this).height();
    }
  });

  // Set the height of all those children to whichever was highest
  jQuery('.recent-posts-extended-text-wrap',this).height(highestBox);
});