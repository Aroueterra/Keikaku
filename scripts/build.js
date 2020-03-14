function getval(select) {
  var inputBox = document.getElementById("changeText");
  if (select.value.toLowerCase() == "season") {
    inputBox.value = select.value.toLowerCase() + ":" + "[period-year]";
  } else {
    inputBox.value = select.value.toLowerCase() + ":" + inputBox.value;
  }
}
function btnDelete(details) {
  $.ajax({
    url: "clearSession.php", //the page containing php script
    type: "post", //request type,
    dataType: "json",
    data: { DeleteID: $(details).val() },
    success: function(result) {
      console.log("nice");
      $(details).parent.parent.remove();
    }
  });
}
$("btn-delete").click(function() {
  $.ajax({
    type: "POST",
    url: "clearSession.php",
    data: { DeleteID: $("btn-delete").val() },
    function(response) {
      // alert('sum performed sucessfully');
    }
  });
});
$(".btn-delete").click(function() {
  $.ajax({
    url: "clearSession.php",
    data: { action: "test", DeleteID: $(this).val() },
    type: "post",
    target: event.target,
    success: function(output) {
      $(target)
        .closest(".column")
        .remove();
    }
  });
});

$(".add-title").click(function() {
  $.ajax({
    url: "createSession.php",
    data: { action: "test", storeID: $(this).val() },
    type: "post",
    target: event.target,
    success: function(output) {
      //   $(target).closest(".column").remove();
      // alert(output);
    }
  });
});

$(document).ready(function() {
  $(".logout").click(function() {
    $.ajax({
      url: "logout.php",
      data: { action: "test", logout: $(this).val() },
      type: "post",
      target: event.target,
      success: function(output) {
        //   $(target).closest(".column").remove();
        window.location.reload(false);
      }
    });
  });
});
$(document).ready(function() {
  $(".logout").click(function() {
    $.ajax({
      url: "logout.php",
      data: { action: "test", logout: window.location.href },
      type: "post",
      target: event.target,
      success: function(output) {
        //alert(output + " o!");
        // window.open = 'clearToken.php';
        $.ajax({ url: "clearToken.php" });
        window.location.replace(output);
        //window.open('clearToken.php', '_blank');
        // location.href= output;
        //   $(target).closest(".column").remove();  $(this).val()
        // alert(window.location.href);
        // window.location.reload(false);
      }
    });
  });
});

$(document).ready(function() {
  $(".proceed").click(function() {
    named = "";
    if ($(this).val() === 0) {
      if ($(".anon").length === 0) {
        named = "";
      } else {
        named = $(".anon").val();
      }
    } else {
      named = $(this).val();
    }
    window.location.href = "customize.php";
  });
});
$(function(){
  $("#anon").on("blur", function() {
    name = "";
    if ($("#anon").val) {
      name = $("#anon").val();
      $("#proceed").val(name);
      // alert("its not blank" + $("#anon").val());
    }
  });
});

$('#changeText').keypress(function(event){
  if(event.keyCode == 13){
    $('#submitSearch').click();
  }
});

$(function(){
  $('form').each(function () {
      var thisform = $(this);
      thisform.prepend(thisform.find('button.default').clone().css({
          position: 'absolute',
          left: '-999px',
          top: '-999px',
          height: 0,
          width: 0
      }));
  });
});