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
  $("#avatarSelect").change(function() {
    newpath = "images/avatars/" + $(this).val() + ".png";
    $("#avatar").attr("src", newpath);
    $("#avatarPOST").val(newpath);
  });
});
// $("#avatarSelect").change(function() {
//   newpath = "images/avatars/" + $(this).val() + ".png";
//   $("#avatar").attr("src", newpath);
//   $("#avatarPOST").val(newpath);
// });

$(document).ready(function() {
  $("input[type=radio][name=review]").change(function() {
    if (this.value == "yes") {
      $("#fordelete").show();

      $("#fordelete")
        .children(".textarea")
        .each(function() {
          $(this)
            .find(".textarea")
            .prop("required", true);
          $(this).prop("required", true);
          $(this).attr("required", true);
        });
      $(".textarea").prop("required", true);
    } else if (this.value == "no") {
      $("#fordelete")
        .children(".textarea")
        .each(function() {
          $(this)
            .find(".textarea")
            .prop("required", false);
          $(this).prop("required", false);
          $(this).attr("required", false);
          $(this).removeAttr("required");
        });
      $("#fordelete").hide();
      $(".textarea").removeAttr("required");
    }
  });
});

var clicked = false;
$("input:radio.radio").click(function(event) {
  if (clicked) {
    event.preventDefault();
  }
  clicked = true;
});

// $(document).ready(function() {
//   $("#save").click(function() {
//     $.ajax({
//       url: "createPlan.php",
//       data: { action: "test", create: "true" },
//       type: "post",
//       target: event.target,
//       success: function(output) {
//          // $.ajax({ url: "clearToken.php" });
//         // window.location.replace(output);
//         alert("Plan created!");
//         // window.open = 'clearToken.php';

//         //window.open('clearToken.php', '_blank');
//         // location.href= output;
//         //   $(target).closest(".column").remove();  $(this).val()
//         // alert(window.location.href);
//         // window.location.reload(false);
//       }
//     });
//   });
// });
