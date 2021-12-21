/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // Visitor Chart Script
    var visitorChart = document.getElementById("visitorChart");
    if (visitorChart) {
        var statistics_chart = visitorChart.getContext("2d");
        var myChart = new Chart(statistics_chart, {
            type: "line",
            data: {
                labels: [
                    "Sunday",
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                ],
                datasets: [
                    {
                        label: "Statistics",
                        data: [640, 387, 530, 302, 430, 270, 488],
                        borderWidth: 5,
                        borderColor: "#6777ef",
                        backgroundColor: "rgba(0, 131, 255,.1)",
                        pointBackgroundColor: "#fff",
                        pointBorderColor: "#6777ef",
                        pointRadius: 4,
                    },
                ],
            },
            options: {
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [
                        {
                            gridLines: {
                                display: false,
                                drawBorder: false,
                            },
                            ticks: {
                                stepSize: 150,
                            },
                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                color: "#fbfbfb",
                                lineWidth: 2,
                            },
                        },
                    ],
                },
            },
        });
    }
    $("#about_content").summernote({
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline", "clear"]],
            ["fontname"],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
        ],
        height: 200,
    });

    let $uploadCrop = $("#crop").croppie({
        enforceBoundary: true,
        viewport: {
            width: 450,
            height: 225,
        },
        boundary: {
            width: 800,
            height: 400,
        },
    });

    function readFile(input) {
        if (input.files && input.files[0]) {
            if (input.files[0].size <= 1024 * 1000) {
                if (/^image/.test(input.files[0].type)) {
                    // only image file
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        let arr = new Uint8Array(e.target.result).subarray(
                            0,
                            4
                        );
                        let header = "";
                        for (let i = 0; i < arr.length; i++) {
                            header += arr[i].toString(16);
                        }

                        // Check the file signature against known types
                        let type = "unknown";
                        switch (header) {
                            case "89504e47":
                                type = "image/png";
                                break;
                            case "47494638":
                                type = "image/gif";
                                break;
                            case "ffd8ffe0":
                            case "ffd8ffe1":
                            case "ffd8ffe2":
                                type = "image/jpeg";
                                break;
                            // case "25504446":
                            //     type = "application/pdf";
                            //     break;
                            default:
                                type = "unknown";
                                break;
                        }
                        if (type && type !== "unknown") {
                            let readData = new FileReader();
                            readData.onload = function (e) {
                                $("#crop-upload").attr(
                                    "data-format",
                                    input.files[0].type.split("/")[1]
                                );
                                $("#crop-upload").attr(
                                    "data-field",
                                    input.getAttribute("data-field")
                                );
                                $("#crop-upload").attr(
                                    "data-preview",
                                    input.getAttribute("data-preview")
                                );
                                $("#cropperModal").modal("show");
                                $uploadCrop
                                    .croppie("bind", {
                                        url: e.target.result,
                                    })
                                    .then(function () {});
                            };
                            readData.readAsDataURL(input.files[0]);
                        } else {
                            alert("You may only select image files");
                        }
                    };

                    reader.readAsArrayBuffer(input.files[0]);
                } else {
                    alert("You may only select image files");
                }
            } else {
                alert("You may only select file under 1 Mb");
            }
        } else {
            alert("Sorry - you're browser doesn't support the FileReader API");
        }
    }
    $(".cropper-trigger").change(function () {
        readFile(this);
    });

    $("#crop-upload").on("click", function () {
        let extension = this.getAttribute("data-format");
        let inputField = this.getAttribute("data-field");
        let preview = this.getAttribute("data-preview");
        $uploadCrop
            .croppie("result", {
                type: "base64",
                size: { width: 1920, height: 960 },
                quality: 1,
                format: extension,
            })
            .then(function (base64) {
                $.ajax({
                    type: "POST",
                    url: "/image-upload",
                    dataType: "json",
                    data: {
                        extension: extension,
                        image: base64,
                    },
                    success: function (response) {
                        if (response) {
                            // document
                            //     .getElementById("heroImage")
                            //     .setAttribute("src", base64);
                            // alert("Image uploaded succesfully");
                            document.getElementById(inputField).value =
                                response.fileName;
                            document
                                .getElementById(preview)
                                .setAttribute("src", base64);
                            $("#cropperModal").modal("toggle");
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    },
                });
            });
    });
    // $(".cropper-trigger").change(function () {
    //     // console.log(URL.createObjectURL(event.target.files[0]));
    //     let fileCount = this.files.length;
    //     if (
    //         fileCount &&
    //         (this.files[0].type == "image/jpeg" ||
    //             this.files[0].type == "image/jpg" ||
    //             this.files[0].type == "image/png")
    //     ) {
    //         let fileUrl = URL.createObjectURL(event.target.files[0]);
    //         document.getElementById("heroImage").setAttribute("src", fileUrl);
    //         // document
    //         //     .getElementById("cropperImage")
    //         //     .setAttribute("src", fileUrl);
    //         let a = document.getElementById("cropperImage").nextSibling;
    //         $("#cropperModal").modal("show");
    //         $("#crop").croppie({
    //             url: fileUrl,
    //             boundary: {
    //                 width: 300,
    //                 height: 300,
    //             },
    //         });
    //     } else {
    //         alert("Ekstensi file harus gambar");
    //     }
    // });

    const image = document.getElementById("cropperImage");
    // const heroCropper = new Cropper(hero, {
    //     aspectRatio: 16 / 9,

    //     crop(event) {
    //         console.log(event.detail.x);
    //         console.log(event.detail.y);
    //         console.log(event.detail.width);
    //         console.log(event.detail.height);
    //         console.log(event.detail.rotate);
    //         console.log(event.detail.scaleX);
    //         console.log(event.detail.scaleY);
    //     },
    // });
    // const about = document.getElementById("about_cropper");
    // const aboutCropper = new Cropper(about, {
    //     aspectRatio: 16 / 9,

    //     crop(event) {
    //         console.log(event.detail.x);
    //         console.log(event.detail.y);
    //         console.log(event.detail.width);
    //         console.log(event.detail.height);
    //         console.log(event.detail.rotate);
    //         console.log(event.detail.scaleX);
    //         console.log(event.detail.scaleY);
    //     },
    // });
});
