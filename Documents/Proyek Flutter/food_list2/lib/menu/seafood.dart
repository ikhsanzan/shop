import 'package:flutter/material.dart';
import 'package:food_list2/model/ingredients.dart';
import 'package:food_list2/view/detail.dart';
// import 'package:food_list2/view/detail.dart';
import 'package:http/http.dart' as http;
import 'dart:convert'; //json

 
void main() => runApp(new Seafood());
 
// App root class
class Seafood extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return new MaterialApp(
        // title: 'The Ingredients',
        debugShowCheckedModeBanner: false,
         home: new IngredientsPage());
  }
}
 
// Home page class
class IngredientsPage extends StatefulWidget {
  IngredientsPage({Key key}) : super(key: key);
 
  @override
  _IngredientsPageState createState() => new _IngredientsPageState();
}
 
// Home page state class
class _IngredientsPageState extends State<IngredientsPage> {
  List<Ingredients> ingredients = [];
 
  @override
  void initState() {
    super.initState();
    loadData();
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
        appBar: new AppBar(
          title: new Text("Menu Seafood"),
        ),
        body: 
        
        getBody()
        
        );
  }
 
 



  getBody() {
    if (ingredients.length == 0) {
      return new Center(child: new CircularProgressIndicator());
    } else {
      return getListView();
    }
  }
 
  ListView getListView() => new ListView.builder(
      itemCount: ingredients.length,
      itemBuilder: (BuildContext context, int position) {
        return getRow(position);
      });
 
  Widget getRow(int i) {
    return new GestureDetector(
        child: new Padding(
            padding: new EdgeInsets.all(10.0),
            child: Column(
              children: <Widget>[
                Image.network('${ingredients[i].strMealThumb}'),
                new Text("${ingredients[i].strMeal}"),
              ],
            )),
        onTap: () {
          // Navigator.of(context).push(new MaterialPageRoute(
          //             builder: (BuildContext context) => new IngredientsDetailPage(
          //               ingredients: ingredients[i]
          //               // nama: menunya['nama'],
          //               // resep: menunya['resep'],
          //               // gambar: gambar,
          //             )
          // )
          // );

          Navigator.push(
              context,
              MaterialPageRoute(
                  builder: (context) =>
                      IngredientsDetailPage(ingredients: ingredients[i])
              )
          );
        });
  }
 
  loadData() async {
    String dataURL = "https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood";
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




// class IngredientsDetailPage extends StatefulWidget {
//   Ingredients ingredients;

//   IngredientsDetailPage({Key key, @required this.ingredients})
//       : super(key: key);

//   @override
//   _IngredientsDetailPageState createState() => _IngredientsDetailPageState();
// }

// class _IngredientsDetailPageState extends State<IngredientsDetailPage> {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//         appBar: AppBar(

//           title: Text("Detail Ingredients"),
//         ),
//         body: getBody());
//   }

//   getBody() {
//     return new ListView(
//       children: <Widget>[
//         Container(
//             width: 480.0,
//             height: 248.0,
//             decoration: new BoxDecoration(
//                 shape: BoxShape.circle,
//                 image: new DecorationImage(
//                     fit: BoxFit.fill,
//                     image: NetworkImage('${widget.ingredients.strMealThumb}')
//                     // Image.network('${ingredients[i].strMealThumb}'),

//                     // NetworkImage("path to your image")
//                     ))),
//         Container(
//           padding: const EdgeInsets.all(32.0),
//           child: Text(
//             "${widget.ingredients.strMeal}",
//             softWrap: true,
//           ),
//         )
//       ],
//     );
//   }
// }
