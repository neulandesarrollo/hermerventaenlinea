var app = angular.module("myApp", ["ngRoute"]);

// Control 1

app.controller("control_1", function($scope) {
    $scope.clase = [
        "Clase A",
        "Clase AMG GT",
        "Clase B",
        "Clase C",
        "Clase CLA",
        "Clase CLS",
        "Clase E",
        "Clase G",
        "Clase GL",
        "Clase GLA",
        "Clase GLC",
        "Clase GLE",
        "Clase GLS",
        "Clase M",
        "Clase S",
        "Clase SL",
        "Clase SLC",
        "Clase SLK",
        "Forfour",
        "Fortwo",
    ]
    $scope.modelo = [
        "G 63 MG",
        "G 65 MG",
        "G 70 MG",
        "G 72 MG",
    ]
    $scope.color = [
        "G Gris platino",
        "G Rojo platino",
        "G Verde platino",
        "G Azul platino",
    ]
    $scope.financiamiento = [
        "xxxxx",
        "yyyyy",
        "zzzzz",
    ]
    $scope.enganche = [
        "$120,000.00",
        "$140,000.00",
        "$160,000.00",
        "$180,000.00",
    ]
    $scope.plazo = [
        "34 meses",
        "40 meses",
        "52 meses",
        "55 meses",
    ]
    $scope.precioModelo = '$187,000.00';
    $scope.mensualidades = '$5,500.00';
});

// Control 3

app.controller("control_3", function($scope) {
    $scope.mes = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
    ]
     $scope.anio = [
        "2016",
        "2015",
        "2014",
        "2013",
        "2012",
        "2011",
        "2010",
        "2009",
        "2008",
        "2007",
        "2006",
    ]
});



