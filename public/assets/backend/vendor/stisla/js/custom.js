/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(document).ready(function () {
    // Visitor Chart Script
    var statistics_chart = document
        .getElementById("visitorChart")
        .getContext("2d");
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
    $("#aboutContent").summernote({
        toolbar: [
            ["style", ["style"]],
            ["font", ["bold", "underline", "clear"]],
            ["fontname"],
            ["color", ["color"]],
            ["para", ["ul", "ol", "paragraph"]],
        ],
    });
});

// Accordion Button + to -
let btnPlus = document.querySelectorAll(".btn-accordion");
console.log(
    btnPlus[0].parentElement.parentElement
        .querySelectorAll(".card-header")[1]
        .children[0].children[1].children[0].classList.remove("fa-minus")
);
btnPlus.forEach(function (plus) {
    // console.log(plus.parentElement);
    plus.addEventListener("click", function () {
        let icon =
            plus.parentElement.parentElement.querySelectorAll(".card-header");
        if (plus.children[1].children[0].classList.contains("fa-plus")) {
            icon.forEach(function (ic) {
                if (
                    ic.children[0].children[1].children[0].classList.contains(
                        "fa-minus"
                    )
                ) {
                    ic.children[0].children[1].children[0].classList.remove(
                        "fa-minus"
                    );
                    ic.children[0].children[1].children[0].classList.add(
                        "fa-plus"
                    );
                }
            });
            plus.children[1].children[0].classList.remove("fa-plus");
            plus.children[1].children[0].classList.add("fa-minus");
        } else {
            plus.children[1].children[0].classList.remove("fa-minus");
            plus.children[1].children[0].classList.add("fa-plus");
        }
    });
});
