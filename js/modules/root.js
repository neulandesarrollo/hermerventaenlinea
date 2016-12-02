var app = angular.module("myApp", ["ngRoute"]);

// Control 1

app.controller("control_1", function($scope) {
    $scope.clase = [
        "Clase A",
        
    ]
    $scope.modelo = [
        "G 63 MG",
        
    ]
    $scope.color = [
        "G Gris platino",
        
    ]
    $scope.financiamiento = [
        "xxxxx",
        
    ]
    $scope.enganche = [
        "$120,000.00",
       
    ]
    $scope.plazo = [
        "34 meses",
       
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



