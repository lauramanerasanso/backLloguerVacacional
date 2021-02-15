<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Gràfics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css" rel="stylesheet" data-semver="3.0.1"
          data-require="normalize@*"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script src="//d3js.org/d3-scale-chromatic.v0.3.min.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/style/css/_general.css"/>
    <style>


        rect {
            stroke-width: 2;
        }



        h1 {
            font-size: 1.6em;
            font-family: 'heebo';
            width: 100%;
            color: #444;
            text-align: center;
            margin: 0px 10px;
            0px;
        }

        .chart {
            margin-top: 5%;
            margin-bottom: 5%;
            background: #fff;
            border: 1px solid #ddd;
            max-width: 880px;
            height: 550px;
            border-radius: 4px;
            overflow-y: hidden;
            position: relative;
        }

        .chart line,
        .chart path {
            stroke: #ddd;
            shape-rendering: crispEdges;
        }

        .chart text {
            fill: #999;
        }

        .bar {
            fill: #d6d6d6;
            transition: 0.2s;
        }

        .bar:hover {
            fill: #967ADC;
        }

        .callout {
            background: #fff;
            padding: 0 20px;
            border: 1px solid #ddd;
            font-size: 12px;
            color: #888;
            font-family: 'trebuchet ms';
            text-align: center;
            border-radius: 4px;
            margin: 10px;
            font-weight: 400;
            position: absolute;
            top: 7px;
            right: 7px;
            z-index: 2;
        }

        .yUnits {
            transform: rotate(-90deg);
            font-family: 'trebuchet ms';
            font-size: 10px;
            opacity: 0.6;
        }


        #chart {
            margin-left: 10%;
            margin-top: 5%;
            margin-bottom: 5%;

        }


    </style>
</head>
<body>
<?php
include('header.php');
?>


<div class="container-fluid" id="c">
    <div class="row">
        <div class="col-2">
            <a href="/reserves" class="btn mr-auto"><i class="fas fa-arrow-left"></i> Torna</a>
        </div>
        <div class="col-9" >
            <h2 class="titol"> Gràfics</h2>
            <h5>Aquest gràfic representa una comparativa de les reserves de cada casa:</h5>
            <div id="chart"></div>
            <h5>Aquest gràfic representa una comparativa de les reserves de cada mes, afegint la mitja de
                reserves/mes:</h5>
            <div class="chart container">
                <div class="callout row">
                    <p>Wins: -xx- </p>
                </div>
            </div>
        </div>

    </div>
</div>
<script data-require="d3@*" data-semver="4.0.0" src="https://d3js.org/d3.v4.min.js"></script>
<script>


    var xhttp = new XMLHttpRequest();

    var dataset = [];

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var info = JSON.parse(this.responseText);

            for (i in info) {
                var n = info[i].traduccioNom;
                var c = info[i].cont;

                dataset.push({label: n, count: c});

            }


            var width = 360;
            var height = 360;
            var radius = Math.min(width, height) / 2;
            var donutWidth = 75;
            var legendRectSize = 18;                                  // NEW
            var legendSpacing = 4;                                    // NEW

            var color = d3.scaleOrdinal(d3.schemePastel1);

            var svg = d3.select('#chart')
                .append('svg')
                .attr('width', width)
                .attr('height', height)
                .append('g')
                .attr('transform', 'translate(' + (width / 2) +
                    ',' + (height / 2) + ')');

            var arc = d3.arc()
                .innerRadius(radius - donutWidth)
                .outerRadius(radius);

            var pie = d3.pie()
                .value(function (d) {
                    return d.count;
                })
                .sort(null);

            var arcs = svg.selectAll("g.slice")
                .data(pie(dataset))
                .enter()
                .append("svg:g")
                .attr("class", "slice");

            var path = svg.selectAll('path')
                .data(pie(dataset))
                .enter()
            arcs.append('path')
                .attr('d', arc)
                .attr('fill', function (d, i) {
                    return color(d.data.label);
                });

            arcs.append("svg:text")
                .attr("transform", function (d) {
                    d.innerRadius = 0;
                    d.outerRadius = radius;
                    return "translate(" + arc.centroid(d) + ")";
                })
                .attr("text-anchor", "middle")
                .text(function (d, i) {
                    return dataset[i].count;
                });


            var legend = svg.selectAll('.legend')
                .data(color.domain())
                .enter()
                .append('g')
                .attr('class', 'legend')
                .attr('transform', function (d, i) {
                    var height = legendRectSize + legendSpacing;
                    var offset = height * color.domain().length / 2;
                    var horz = -2 * legendRectSize;
                    var vert = i * height - offset;
                    return 'translate(' + horz + ',' + vert + ')';
                });

            legend.append('rect')
                .attr('width', legendRectSize)
                .attr('height', legendRectSize)
                .style('fill', color)
                .style('stroke', color);

            legend.append('text')
                .attr('x', legendRectSize + legendSpacing)
                .attr('y', legendRectSize - legendSpacing)
                .text(function (d) {
                    return d;
                });

        }

    };


    xhttp.open("POST", "http://api.mallorcarustic.me/reserves/grafic-pie", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();

    window.cache = {
        mesos: ["Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"],
        reserves: []

    };

    $.ajax({
        url: 'http://api.mallorcarustic.me/reserves/grafic-bar',
        method: 'POST',
        data: {},
        async: false,
        success: function (data) {
            var reserves = JSON.parse(data);

            for (r in reserves) {
                var numRes = reserves[r].num;
                window.cache.reserves.push(numRes);
            }

            if (window.cache.reserves.length < 12) {
                for (var i = window.cache.reserves.length; i < 12; i++) {
                    window.cache.reserves.push(0);
                    //console.log(window.cache.reserves);
                }
            }
        }
    });

        // 2. Define chart dimensions + margin
        var margin = {top: 40, bottom: 80, right: 480, left: 80};
    var width = 1280 - margin.left - margin.right;
    var height = 550 - margin.top - margin.bottom;

    // 3. Append outer SVG viewport to body
    var svg = d3.select('.chart').append('svg')
        .attr('width', 820)
        .attr('height', height + margin.top + margin.bottom);

    // 4. create inner SVG canvas
    var innerSVG = svg.append('g')
        .attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');

    // 5. Define X,Y scales
    var scaleX = d3.scaleBand().domain(window.cache.mesos).range([0, width]);
    var scaleY = d3.scaleLinear().domain([0, 10]).range([height, 0]); //aquí canviam nums esquerra

    // 6. Define X,Y axis
    var xAxis = innerSVG.append('g').call(d3.axisBottom(scaleX));
    var yAxis = innerSVG.append('g').call(d3.axisLeft(scaleY));

    // 7. Move X axis to chart bottom & rotate X labels
    var newXaxis = xAxis.attr('transform', 'translate(0,' + height + ')');
    var rotateX = xAxis.selectAll("text").attr("transform", "rotate(-90)").attr("y", '-3').attr('x', '-30');

    // 8. Add Y axis units
    var yUnits = innerSVG.append('text')
        .text('n Reserves')
        .attr('class', 'yUnits')
        .attr('x', -52)
        .attr('y', -35)

    // 9. Create bar chart data items
    var sortable_data = innerSVG.selectAll('rect')
        .data(window.cache.reserves)
        .enter().append('rect')
        .attr('width', '40')
        .attr('height', function (d) {
            return height - scaleY(d);
        })
        .attr('x', function (d, i) {
            return 10 + (i * 60);
        })
        .attr('y', function (d) {
            return scaleY(d);
        })
        .attr('class', 'bar')

    // 10. Display calculations in callout
    var all_reserves = d3.sum(window.cache.reserves);
    var average_reserves = Math.round((all_reserves / window.cache.mesos.length));
    d3.select('.callout p').text('Mitja: ' + average_reserves + ' reserves / mes');
</script>
</body>

</html>