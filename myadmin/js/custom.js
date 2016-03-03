$(function(){
	
	$('#datepicker').datepicker({inline: true});
	$('#markItUp').markItUp(myHtmlSettings);
	initMenu();
	$('.info_div').click(function() {$(this).fadeOut('slow')});
	$("#dialog").dialog({ buttons: { "Ok": function() { $(this).dialog("close"); } } });
	$('#tabs').tabs();

	$("#tabledata").resizable({ maxWidth: 940 });
	$.plot($("#placeholder"), [ [[0, 0], [100, 10]]], { yaxis: { max: 10 }, grid: { color: "#000", borderWidth:1} });
	});
	
	
myHtmlSettings = {
    nameSpace:       "html", // Useful to prevent multi-instances CSS conflict
    onShiftEnter:    {keepDefault:false, replaceWith:'<br />\n'},
    onCtrlEnter:     {keepDefault:false, openWith:'\n<p>', closeWith:'</p>\n'},
    onTab:           {keepDefault:false, openWith:'     '},
    markupSet:  [
        {name:'Heading 1', key:'1', openWith:'<h1(!( class="[![Class]!]")!)>', closeWith:'</h1>', placeHolder:'Your title here...' },
        {name:'Heading 2', key:'2', openWith:'<h2(!( class="[![Class]!]")!)>', closeWith:'</h2>', placeHolder:'Your title here...' },
        {name:'Heading 3', key:'3', openWith:'<h3(!( class="[![Class]!]")!)>', closeWith:'</h3>', placeHolder:'Your title here...' },
        {name:'Heading 4', key:'4', openWith:'<h4(!( class="[![Class]!]")!)>', closeWith:'</h4>', placeHolder:'Your title here...' },
        {name:'Heading 5', key:'5', openWith:'<h5(!( class="[![Class]!]")!)>', closeWith:'</h5>', placeHolder:'Your title here...' },
        {name:'Heading 6', key:'6', openWith:'<h6(!( class="[![Class]!]")!)>', closeWith:'</h6>', placeHolder:'Your title here...' },
        {name:'Preview', call:'preview', className:'preview' }
    ]
}		



 function initMenu() {
  $('#menu ul').hide();
  $('#menu ul:first').show();
  $('#menu li a').click(
  function() {
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
  return false;
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
  $('#menu ul:visible').slideUp('normal');
  checkElement.slideDown('normal');
  return false;
  }
  }
  );
  }				
