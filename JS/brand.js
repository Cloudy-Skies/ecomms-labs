const field = "#brand";

$(field).on("input", function (e) {
  const regex = /\S/;
  const len = 100;
  if (regex.test(e.target.value) && e.target.value.length <= len) {
    $(field).removeClass("wrong");
    $(field).addClass("correct");
  } else {
    $(field).removeClass("correct");
    $(field).addClass("wrong");
  }
});

checkSubmit = (field) => {
  if ($(field).hasClass("correct")) return true;
  return false;
};

$("form").submit(function (event) {
  if (checkSubmit(field)) {
    console.log("hi");
    return true;
  } else {
    event.preventDefault();
    console.log(checkSubmit(field));
    swal({
      title: "Ensure all fields are filled correctly",
      text: `One or more fields were not filled to specification. Kindly try again.`,
      icon: "error",
    });
  }
});
