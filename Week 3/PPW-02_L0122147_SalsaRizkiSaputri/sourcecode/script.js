function openInstagram() {
  alert("Yakin mau buka Instagram Salsa?");
}

function openGithub() {
  alert("Yakin mau buka Github Salsa?");
}

function openWhatsapp() {
  alert("Yakin mau buka Whatsapp Salsa?");
}

$(".card").hover(
  function () {
    // over
    $(this).css("transition", "width 2s, height 2s");
    $(this).css("width", "100%");
    $(this).css("height", "100%");
  },
  function () {
    $(this).css("width", "80%");
    $(this).css("height", "90%");
    // out
  }
);

$(document).ready(function () {
  $(function () {
    $(".card").click(function () {
      $("h5", this).load("desc.txt");
    });
  });
});

// $(document).ready(function () {
//   $(".card").click(function () {
//     $.get("desc.txt", function (data) {
//       $(this).html(data);
//     });
//   });
// });
