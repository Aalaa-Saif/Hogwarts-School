$(document).ready(function() {

    $('.cardjs').click(function(){ //This for quidditch page In sypplies Folder
        $('.cardjs2').toggle('slow');
    })



    //use comm as a class value since you want to group multiple elements
    $('.profjs').click(function(e) { //This for professors page In crew Folders
      var $comm = $(this).siblings('.profjs2').toggle('slow');
      //if you want to hide previously opened comment when a new one is clicked
      $par.not($comm).slideUp('slow');
      e.preventDefault();
    })



    //This for department Folder (Image modal pop up)
     $('.myImg').click(function(){
        //var id = $(this).data('id');
        var id = $(this).attr('data_id');
        $('#mymodal-'+id).css("display","block");

        var img = $(this).attr('src');

       $('#img01-'+id).attr('src',img);
    });

    $('.close').click(function(){
        var id = $(this).data('id');
        $('.modal').css("display","none");
    });

 });

