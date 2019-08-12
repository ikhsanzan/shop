import 'package:flutter/material.dart';
import 'package:food_list2/users.dart';
// import 'package:food_list2/model/ingredients.dart';


void main() {
  runApp(MaterialApp(
  home: Dess()));
}
 
class Dess extends StatefulWidget {
  @override
  _DessState createState() => _DessState();
}

class _DessState extends State<Dess> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        // appBar: AppBar(
        //   title: Text("data"),
        // ),
        body: MyApp()
      //   Container(
      //   child: Center(
      //     child: Text("data"),
      //   )
      // ),
    );
  }
}
