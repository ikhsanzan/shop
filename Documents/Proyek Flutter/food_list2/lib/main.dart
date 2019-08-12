import 'package:flutter/material.dart';
import 'package:food_list2/dess.dart';
// import 'package:food_list2/dess.dart';
import 'package:food_list2/menu/dessert.dart';
import 'package:food_list2/menu/seafood.dart';
// import 'package:food_list2/seafood.dart';
// import 'package:food_list2/dess.dart';
// import 'package:food_list2/menu/dessert.dart';
// import 'package:food_list2/menu/seafood.dart';
// import 'package:food_list2/seafood.dart';
// import 'package:food_list2/model/ingredients.dart';
// import 'package:food_list2/view/detail.dart';
// import 'package:http/http.dart' as http;
// import 'dart:convert'; //json

 
void main() => runApp(new MyApp());


class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Menu(),
    );
  }
}

class Menu extends StatefulWidget {
  @override
  _MenuState createState() => _MenuState();
}

class _MenuState extends State {
  int _selectedIndex = 0;

  final _widgetOptions = [
    Dessert(),
    Seafood(),
    Dess()
    
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      // appBar: AppBar(
      //   title: Text("Menu List"),
      // ),

      body: 
      
      _widgetOptions.elementAt(_selectedIndex),
      bottomNavigationBar: BottomNavigationBar(
          items: [
            BottomNavigationBarItem(
              icon: Icon(Icons.cake),
              title: Text('Dessert'),
            ),
            BottomNavigationBarItem(
              icon: Icon(Icons.file_upload),
              title: Text('Seafood'),
            ),
            BottomNavigationBarItem(
              icon: Icon(Icons.terrain),
              title: Text('tes'),
            ),
          ],
          type: BottomNavigationBarType.fixed,
          currentIndex: _selectedIndex,
          fixedColor: Colors.blueAccent,
          onTap: _onItemTapped,
        ),
    );
  }

  void _onItemTapped(int index) {
    setState(() {
      _selectedIndex = index;
    });
  }
}


// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return MaterialApp(
//       title: 'Title',
//       // theme: kThemeData,
//       home: HomePage(),
//     );
//   }
// }

// class HomePage extends StatefulWidget {
//   @override
//   _HomepageState createState() => _HomepageState();
// }

// class _HomepageState extends State {

// int _selectedIndex = 0;

//   final _widgetOptions = [
//     // Breakfast(),
//     // Dessert(),
    
//   ];

//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: Text("data"),
//       ),

//       body: 
//       _widgetOptions.elementAt(_selectedIndex),
//       bottomNavigationBar:BottomNavigationBar(
//         items: [
//           BottomNavigationBarItem(
//             icon: Icon(Icons.account_circle),
//             title: Text("data")
//             ),
//             BottomNavigationBarItem(
//                icon: Icon(Icons.account_circle),
//             title: Text("data")
//             )
//         ],
//         type: BottomNavigationBarType.fixed,
//           currentIndex: _selectedIndex,
//           fixedColor: Colors.blueAccent,
//           onTap: _onItemTapped,
//       ),
//       );
//   }

// void _onItemTapped(int index) {
//     setState(() {
//       _selectedIndex = index;
//     });
//   }  
// }


// class HomePage extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     final size = MediaQuery.of(context).size;
  
//     return Scaffold(
//       appBar: AppBar(
//         title: Text("data"),
//       ),

//       body: Center(
//         child: Text("data"),
//       )
//     );
//   }
// }


 
// App root class
// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return new MaterialApp(
//         title: 'The Ingredients', home: new IngredientsPage());
//   }
// }
 
// // Home page class
// class IngredientsPage extends StatefulWidget {
//   IngredientsPage({Key key}) : super(key: key);
 
//   @override
//   _IngredientsPageState createState() => new _IngredientsPageState();
// }
 
// // Home page state class
// class _IngredientsPageState extends State<IngredientsPage> {
//   List<Ingredients> ingredients = [];
 
//   @override
//   void initState() {
//     super.initState();
//     loadData();
//   }


 
//   @override
//   Widget build(BuildContext context) {
//     return new Scaffold(
//         appBar: new AppBar(
//           title: new Text("The Ingredients"),
//         ),
//         body: 
        
//         getBody()
        
//         );
//   }
 
 



//   getBody() {
//     if (ingredients.length == 0) {
//       return new Center(child: new CircularProgressIndicator());
//     } else {
//       return getListView();
//     }
//   }
 
//   ListView getListView() => new ListView.builder(
//       itemCount: ingredients.length,
//       itemBuilder: (BuildContext context, int position) {
//         return getRow(position);
//       });
 
//   Widget getRow(int i) {
//     return new GestureDetector(
//         child: new Padding(
//             padding: new EdgeInsets.all(10.0),
//             child: Column(
//               children: <Widget>[
//                 Image.network('${ingredients[i].strMealThumb}'),
//                 new Text("${ingredients[i].strMeal}"),
//               ],
//             )),
//         onTap: () {
//           Navigator.push(
//               context,
//               MaterialPageRoute(
//                   builder: (context) =>
//                       IngredientsDetailPage(ingredients: ingredients[i])));
//         });
//   }
 
//   loadData() async {
//     String dataURL = "https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood";
//     http.Response response = await http.get(dataURL);
//     var responseJson = json.decode(response.body);
//     if (response.statusCode == 200) {
//       setState(() {
//         ingredients = (responseJson['meals'] as List)
//             .map((p) => Ingredients.fromJson(p))
//             .toList();
//       });
//     } else {
//       throw Exception('Failed to load photos');
//     }
//   }
// }