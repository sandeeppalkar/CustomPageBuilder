$scope.removeItem = function removeItem() {
      var index = $scope.cartModel.indexOf(this.item);
      $scope.cartModel.splice(index, 1);
    };