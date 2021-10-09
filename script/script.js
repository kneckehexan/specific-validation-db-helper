$(document).ready(function() {
  $('#krav').change(function() {
    var select_val = $(this).val();

    if (select_val == 'TSP_pipe') {
      $('#29590379').prop('disabled', false);
      $('#29588917').prop('disabled', false);
      $('#29588921').prop('disabled', false);
      $('#29588924').prop('disabled', false);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else if (select_val == 'TSP_pump') {
      $('#29588921').prop('disabled', false);
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else if (select_val == 'URS_funk') {
      $('#29590379').prop('disabled', false);
      $('#29588917').prop('disabled', false);
      $('#29588924').prop('disabled', false);
      $('#29588921').prop('disabled', false);
      $('#29595520').prop('disabled', false);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
    } else if(select_val == 'TSP_power'){
      $('#29595520').prop('disabled', false);
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
    } else if(select_val == 'TSP_heat'){
      $('#29595520').prop('disabled', false);
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
    } else if (select_val == 'TSP_T101') {
      $('#29594813').prop('disabled', false);
      $('#29588926').prop('disabled', false);
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else {
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    }
  });

  $('input:radio[name="docchoice"]').change(function() {
    if ($(this).is(':checked') && $(this).val() == 'ettkravdoc'){
      $('#divkrav').show();
      $('#divtest').hide();
      $('#divselspm').hide();
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else if ($(this).is(':checked') && $(this).val() == 'etttestdoc'){
      $('#divkrav').hide();
      $('#divtest').show();
      $('#divselspm').hide();
      $('#29590379').prop('disabled', false);
      $('#29588917').prop('disabled', false);
      $('#29588924').prop('disabled', false);
      $('#29588921').prop('disabled', false);
      $('#29594813').prop('disabled', false);
      $('#29588926').prop('disabled', false);
      $('#29595520').prop('disabled', false);
    } else if ($(this).is(':checked') && $(this).val() == 'jmf'){
      $('#divkrav').show();
      $('#divtest').show();
      $('#divselspm').hide();
    } else if ($(this).is(':checked') && $(this).val() == 'spm'){
      $('#divkrav').hide();
      $('#divtest').hide();
      $('#divselspm').show();
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else if ($(this).is(':checked') && $(this).val() == 'missingdemands'){
      $('#divkrav').show();
      $('#divtest').hide();
      $('#divselspm').hide();
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    } else {
      $('#29590379').prop('disabled', true);
      $('#29588917').prop('disabled', true);
      $('#29588924').prop('disabled', true);
      $('#29588921').prop('disabled', true);
      $('#29594813').prop('disabled', true);
      $('#29588926').prop('disabled', true);
      $('#29595520').prop('disabled', true);
    }

  });

  /*
   * Sort table
   */
  $('th').on('click', function() {
    if ($(this).closest('#translation-table').length){
      return;
    }
    var table = $(this).parents('table').eq(0);
    var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
    this.asc = !this.asc;
    if (!this.asc) {
      rows = rows.reverse();
    }
    for (var i = 0; i < rows.length; i++) {
      table.append(rows[i]);
    }
  });

  function comparer(index) {
    return ((a, b) => getCellValue(a, index).localeCompare(getCellValue(b, index), undefined, {numeric: true}));
  }

  function getCellValue(row, index) {
    return $(row).children('td').eq(index).text()
  }

  /*
   * Search table
   */
  $('#tablesearch').on('keyup', function() {
    $('#tableexclude').prop('disabled', true);
    var value = $(this).val().toLowerCase();
    $('#maintable tr').filter(function() {
      if (value !== ''){
        var showsearch = ($(this).text().toLowerCase().indexOf(value) > -1);
        $('#tableexclude').prop('disabled', true);
      } else {
        var showsearch = true;
        $('#tableexclude').prop('disabled', false);
      }
      $(this).toggle(showsearch);
    });
  });

  /*
   * Exclude search term from table
   */
  $('#tableexclude').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#maintable tr').filter(function() {
      if (value !== ''){
        var showexclude = ($(this).text().toLowerCase().indexOf(value) === -1);
        $('#tablesearch').prop('disabled', true);
      } else {
        var showexclude = true;
        $('#tablesearch').prop('disabled', false);
      }
      $(this).toggle(showexclude);
    });
  });

  /*
   * Highlight selected row
   */
  $(document).on('click', 'tbody tr', function(event) {
    if ($(this).closest('#translation-table').length){
      return;
    }
    if($(this).hasClass('highlightRow')){
      $(this).removeClass('highlightRow');
    } else {
      $('tbody tr').removeClass('highlightRow');
      $(this).addClass('highlightRow');
    }
  });
  

  /** MODAL **/
  $('td').on({
    mousedown: function() {
      var $cell = $(this);
      var txt = $cell.text();
      if(txt != 'N/A'){
        var header = $cell.closest('table').find('th').eq($cell.index()).text();
        var headerID = null;
      } else {
        var header = $cell.closest('table').find('th').eq(1).text();
        var headerID = $cell.closest('tr').find('td:first').text();
        var doctype = $cell.closest('table').find('th').eq($cell.index()).text();
        var kravid = $cell.closest('tr').find('td').eq(1).text();
      }
      var curRow = $cell.closest('tr');
      var data = {
        id: txt,
        doc: header,
        spmid: headerID,
        doctype: doctype,
        kravid: kravid
      }
      var lenChk = $(this).closest('.cellclick').length
      $(this).data('timer', setTimeout(function() {
        if(lenChk){
          if(curRow.hasClass('highlightRow')){
            curRow.removeClass('highlightRow');
          } else {
            $('tbody tr').removeClass('highlightRow');
            curRow.addClass('highlightRow');
          }
          if((txt != null) || (txt != '') || (txt != 'N/A')){
            $.post('../php/modal.php', data, function(response){
              $('.modal-content').empty();
              $('.modal-content').append(response);
              $('.nfobox').show()
            });
          }
        }
      }, 500));
    },
    mouseup: function() {
      clearTimeout($(this).data('timer'));
    }
  });

  $('#closeModal').on('click', function() {
    $('.nfobox').hide();
  });

  /*
   * Display translation table on mouse click
   */
  $('#translation-table-wrapper').on('click', function(event){
    $('#translation-table').css({'left':event.screenX, 'top':event.screenY - 50, 'position':'absolute'});
    if ($('#translation-table').css('display') == 'none'){
      $('#translation-table').show();
    } else {
      $('#translation-table').hide();
    }
  });

  /** close translation table **/
  $('#close-translation-table').on('click', function() {
    $('#translation-table').hide();
  });

  /*
   * Slide-out menu
   */
  $('.container').on('click', function menuBar(){
    $(this).toggleClass("change");
    $('#selectionform').toggle('500');
  });

  /** Initial view of main **/
  function isEmpty(el){
    return !$.trim(el.html());
  }
  if (isEmpty($('main'))){
    $('main').html('<h2 id="intro">Välj alternativ i menyn till vänster</h2>');
  }
  $('main').on('change', function() {
    if (isEmpty($('main'))){
      $('main').html('<h2 id="intro">Välj alternativ i menyn till vänster</h2>');
    }
  });
  $('#nav-btn').on('click', function(){
    $('#intro').remove();
  });

});
