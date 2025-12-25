// Skill Chart
new Chart(document.getElementById("skillsChart"), {
    type: 'bar',
    data: {
        labels: ['SQL','Python','Excel','Power BI','Tableau'],
        datasets: [{
            data: [90,85,95,80,75],
            backgroundColor: '#0a4d8c'
        }]
    }
});

// Fetch projects
fetch("fetch_projects.php")
.then(res => res.json())
.then(data => {
    let output = "";
    data.forEach(p => {
        output += `<div><h3>${p.title}</h3><p>${p.description}</p></div>`;
    });
    document.getElementById("projects").innerHTML = output;
});
