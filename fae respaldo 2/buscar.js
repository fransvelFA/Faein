$(document).ready(function(){
    $('#search').focus()
  
    $('#search').on('keyup', function(){
      var search = $('#search').val()
      $.ajax({
        type: 'POST',
        url: 'buscar1.php',
        data: {'search': search},
        beforeSend: function(){
          $('#result').html('<img src="img/pacman.gif">')
        }
      })
      .done(function(resultado){
        $('#result').html(resultado)
      })
      .fail(function(){
        alert('Hubo un error');
      })
    })
  })