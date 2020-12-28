$("#read-terms").click(() => {
    $("#terms").css("display", "flex");
    $("body").css("overflow", "hidden");
})

$("#close-terms").click(() => {
    $("#terms").css("display", "none");
    $("body").css("overflow-x", "hidden").css("overflow-y", "unset");
})