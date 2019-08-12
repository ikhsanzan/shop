import 'package:flutter/material.dart';
import 'package:food_list2/model/ingredients.dart';
import 'package:http/http.dart' as http;
import 'dart:convert'; //json

 
class IngredientsDetailPage extends StatefulWidget {
  Ingredients ingredients;
 
  IngredientsDetailPage({Key key, @required this.ingredients})
      : super(key: key);

  @override
  _IngredientsDetailPageState createState() => _IngredientsDetailPageState();
}

class _IngredientsDetailPageState extends State<IngredientsDetailPage> {
  List<Ingredients> ingredients = [];

  String idMeal;

@override
  void initState() {
    super.initState();
    detailFood(idMeal);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          
          title: Text("Detail Ingredients"),
        ),
        body: getBody());
  }

  getBody() {
    return new ListView(
      children: <Widget>[
        Container(
                  width: 480.0,
                  height: 248.0,

                  decoration: new BoxDecoration(
                    shape: BoxShape.circle,
                    image: new DecorationImage(
                        fit: BoxFit.fill,
                        image: NetworkImage('${widget.ingredients.strMealThumb}')
                // Image.network('${ingredients[i].strMealThumb}'),
                        
                        // NetworkImage("path to your image")
                    )
                )
                ),
        Container(
          padding: const EdgeInsets.all(32.0),
          child: Text(
            "${widget.ingredients.strMeal}",
            softWrap: true,
          ),
        ),
        Card(
          child: Text("${widget.ingredients.idMeal}"),
        ),
      ],
    );
  }
  detailFood(String idMeal) async {
    String dataURL = "https://www.themealdb.com/api/json/v1/1/lookup.php?i=$idMeal";
    http.Response response = await http.get(dataURL);
    var responseJson = json.decode(response.body);
    if (response.statusCode == 200) {
        setState(() {
        ingredients = (responseJson['meals'] as List)
            .map((p) => Ingredients.fromJson(p))
            .toList();
      });
    } else {
      throw Exception('Failed to load photos');
    }
  }
}


 