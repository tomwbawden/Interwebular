// Eurotrip custom javascript

  // Form Values

  $(document).ready(function(){
      $('#name').click(function(){
            this.value = '';
            this.style.color = 'black';
      }).blur(function(){
        if ( this.value == '')
            this.value = 'Your Name';
             this.style.color = '#2F3B73';
      });
      $('#email').click(function(){
            this.value = '';
            this.style.color = 'black';
      }).blur(function(){
        if ( this.value == '')
            this.value = 'Your Email';
             this.style.color = '#2F3B73';
      });
  });

  // Layout Fixes

  if ($('#articleWrap').length) {
    $('#sideContent').appendTo('#contentWrap');
    $('.commentsWrap').appendTo('#articleWrap');
    $('.commentsForm').appendTo('#articleWrap');
  }

  $('#sideContent').appendTo('#contentWrap'); 

  // Scroll Pane

  $(function() {
      $('#articleWrap').jScrollPane("", false);
  });

