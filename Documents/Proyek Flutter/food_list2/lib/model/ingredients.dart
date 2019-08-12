class Ingredients {
 
  final String idMeal;
  final String strMeal;
  final String strMealThumb;
  final String resep;
  
  Ingredients(this.idMeal, this.strMeal, this.strMealThumb, this.resep);
  factory Ingredients.fromJson(Map<String, dynamic> json) {
    return Ingredients(
        json['idMeal'],
        json['strMeal'],
        json['strMealThumb'],
        json['resep']
    );
  }
}
