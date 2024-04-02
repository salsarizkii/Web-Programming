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

$(document).ready(function(){
  const weatherAPI = "http://api.weatherapi.com/v1/current.json?key=7e71b6f8993649078d1145132220906&aqi=no";
  const container = $("#container");

  $(".btn-search").click(function(){
      let keyword = $(".keyword").val();
      $.ajax({
          url: `${weatherAPI}&q=${keyword}`,
          method: "GET",
          success: function(data){
              console.log(data);
              let element = showElement(data);
              container.html(element);
          }
      });
  });

  function showElement(data) {
      return `<h3>${data.location.name}, ${data.location.region}, ${data.location.country}</h3>
          <div class="box">
              <img src="https:${data.current.condition.icon}" alt="">
              <h1>${data.current.temp_c} ℃</h1>
          </div>
          <p>${data.current.last_updated}</p>
          <p>${data.current.condition.text}</p>`;
  }
});
