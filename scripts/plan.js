// function getval(select) {
//   var inputBox = document.getElementById("changeText");
//   if (select.value.toLowerCase() == "season") {
//     inputBox.value = select.value.toLowerCase() + ":" + "[period-year]";
//   } else {
//     inputBox.value = select.value.toLowerCase() + ":" + inputBox.value;
//   }
// }
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
$(".upvote").click(function() {
  $(this).removeClass("has-text-grey");
  $(this).addClass("has-text-danger");
});
function upvote(btn) {
  if (this.hasClass("clicked")) {
    this.removeClass("clicked");
    this.removeClass("has-text-danger");
    this.addClass("has-text-grey");
  } else {
    this.addClass("clicked");
    this.addClass("has-text-danger");
    this.removeClass("has-text-grey");
  }
  // $.ajax({
  //   url: "clearSession.php", //the page containing php script
  //   type: "post", //request type,
  //   dataType: "json",
  //   data: { DeleteID: $(details).val() },
  //   success: function(result) {
  //     console.log("nice");
  //     $(details).parent.parent.remove();
  //   }
  // });
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
  $("#avs").change(function() {
    newpath = "images/avatars/" + $(this).val() + ".png";
    $("#avatar").attr("src", newpath);
    $("#avatarPOST").val(newpath);
  });
});

html2canvas($('#navbarBasicExample'), {
  onrendered: function(canvas) {
    var img = canvas.toDataURL()
    window.open(img);
  }
});
// $(document).ready(function() {
//   $(".avs").change(function() {
//     newpath = "images/avatars/" + $(".avs").val() + ".png";
//     $(".avatar").attr("src", newpath);
//     $(".avatarPOST").val(newpath);
//   });
// });

// $(".avs").on("change", function() {
//   var img = $(this).val();
//   $(".avs").each(function() {
//     $(this).val(img);
//   });
// });
$(document).ready(function() {
  $("input[type=radio][name=comment]").change(function() {
    if (this.value == "yes") {
      $("#fordelete").show();
    } else if (this.value == "no") {
      $("#fordelete").hide();
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

document.addEventListener("DOMContentLoaded", () => {
  (document.querySelectorAll(".notification .delete") || []).forEach(
    $delete => {
      $notification = $delete.parentNode;

      $delete.addEventListener("click", () => {
        $notification.parentNode.removeChild($notification);
      });
    }
  );
});

// Trigger modals
(function() {
  var modalFX = (function() {
    var elements = {
      target: "data-target",
      active: "is-active",
      button: ".modal-button",
      close: ".modal-close",
      buttonClose: ".modal-button-close",
      background: ".modal-background"
    };

    var onClickEach = function(selector, callback) {
      var arr = document.querySelectorAll(selector);
      arr.forEach(function(el) {
        el.addEventListener("click", callback);
      });
    };

    var events = function() {
      onClickEach(elements.button, openModal);

      onClickEach(elements.close, closeModal);
      onClickEach(elements.buttonClose, closeAll);
      onClickEach(elements.background, closeModal);

      // Close all modals if ESC key is pressed
      document.addEventListener("keyup", function(key) {
        if (key.keyCode == 27) {
          closeAll();
        }
      });
    };

    var closeAll = function() {
      var openModal = document.querySelectorAll("." + elements.active);
      openModal.forEach(function(modal) {
        modal.classList.remove(elements.active);
      });
      unFreeze();
    };

    var openModal = function() {
      var modal = this.getAttribute(elements.target);
      // freeze();
      document.getElementById(modal).classList.add(elements.active);
    };

    var closeModal = function() {
      var modal = this.parentElement.id;
      document.getElementById(modal).classList.remove(elements.active);
      // unFreeze();
    };

    // Freeze scrollbars
    var freeze = function() {
      document.getElementsByTagName("html")[0].style.overflow = "hidden";
      document.getElementsByTagName("body")[0].style.overflowY = "scroll";
    };

    var unFreeze = function() {
      document.getElementsByTagName("html")[0].style.overflow = "";
      document.getElementsByTagName("body")[0].style.overflowY = "";
    };

    return {
      init: function() {
        events();
      }
    };
  })();

  modalFX.init();
})();
var vali;
// $("select").change(e => {
//   vali = $("option:selected")
//     .map(function() {
//       return this.value;
//     })
//     .get();
//   // selected = selected.replace(new RegExp(',', 'g'),"")
//   // var newpath = "images/avatars/" + selected + ".png";
//   // $("img.avatar").attr("src", newpath);
//   // var b = selected;
//   // vali = vali.replace(/,/g, "");
//   // var myStr = vali;
//   // var newStr = myStr.replace(/,/g, "-");
//   alert(newStr[0]);
//   // var selected = ",,,,,bear,,,,";

//   // selected = selected.replace(/,/g, "");
//   // alert(selected);
//   // $("img.avatar").attr("src", newpath);
//   // $("img.avatar").attr("src", newpath);
//   // $("img.avatar").attr("src", newpath);
//   // $("img.avatar").attr("src", newpath);
//   // $(".avatar").each(function() {
//   //   newpath = "images/avatars/" + selected + ".png";
//   //   $(".avatar").attr("src", newpath);
//   // });
//   //alert(selected);
// });

jQuery(".upvote").click(function() {
  if (this.hasClass("clicked")) {
    this.removeClass("clicked");
    this.removeClass("has-text-danger");
    this.addClass("has-text-grey");
  } else {
    this.addClass("clicked");
    this.addClass("has-text-danger");
    this.removeClass("has-text-grey");
  }
  // var icon = jQuery(this).find("svg");
  // if (icon.attr("data-icon") == "caret-right") {
  //   icon.attr("data-icon", "caret-down");
  // } else {
  //   icon.attr("data-icon", "caret-right");
  // }
});

$(document).on("click", "i", function() {
  switch (this.class) {
    case "upvote":
      if (this.hasClass("clicked")) {
        this.removeClass("clicked");
        this.removeClass("has-text-danger");
        this.addClass("has-text-grey");
        // $.ajax({
        //   url: "logout.php",
        //   data: { action: "test", logout: window.location.href },
        //   type: "post",
        //   target: event.target,
        //   success: function(output) {
        //     //alert(output + " o!");
        //     // window.open = 'clearToken.php';
        //     $.ajax({ url: "clearToken.php" });
        //     window.location.replace(output);
        //     //window.open('clearToken.php', '_blank');
        //     // location.href= output;
        //     //   $(target).closest(".column").remove();  $(this).val()
        //     // alert(window.location.href);
        //     // window.location.reload(false);
        //   }
        // });
      } else {
        this.addClass("clicked");
        this.addClass("has-text-danger");
        this.removeClass("has-text-grey");
        // $.ajax({
        //   url: "logout.php",
        //   data: { action: "test", logout: window.location.href },
        //   type: "post",
        //   target: event.target,
        //   success: function(output) {
        //     //alert(output + " o!");
        //     // window.open = 'clearToken.php';
        //     $.ajax({ url: "clearToken.php" });
        //     window.location.replace(output);
        //     //window.open('clearToken.php', '_blank');
        //     // location.href= output;
        //     //   $(target).closest(".column").remove();  $(this).val()
        //     // alert(window.location.href);
        //     // window.location.reload(false);
        //   }
        // });
      }

      break;
    // add additional cases
  }
});
