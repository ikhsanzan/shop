import 'package:flutter/material.dart';
import 'package:food_list2/dess.dart';
// import 'package:food_list2/model/ingredients.dart';


void main() {
  runApp(MaterialApp(
  home: Sean()));
}
 
class Sean extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: Sea(),
    );
  }
}

class Sea extends StatefulWidget {
  @override
  _SeaState createState() => _SeaState();
}

class _SeaState extends State<Sea> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("data"),
      ),
          body: Container(
        child: Center(
          child: Text("data"),
        )
      ),
    );
  }
}
