const pieChart = document.getElementById("rightChart");
const barChart = document.getElementById("bottomChart");

new Chart(pieChart, {
    type: "pie",
    data: {
        labels: ["Revenue", "Quota"],
        datasets: [
            {
                label: "# of Votes",
                data: [12, 19],
                borderWidth: 1,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

// -----------------Bottom Chart ------------------ //
new Chart(barChart, {
    type: "line",
    data: {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sept",
            "Oct",
            "Nov",
            "Dec",
        ],
        datasets: [
            {
                label: "Monthly Income",
                data: [12, 19, 3, 5, 2, 3, 15, 20, 26, 15, 20, 26],
                borderWidth: 3,
                backgroundColor: [
                    "rgb(255, 99, 132)",
                    "rgb(54, 162, 235)",
                    "rgb(255, 205, 86)",
                ],
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
