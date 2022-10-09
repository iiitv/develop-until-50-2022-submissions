// ignore_for_file: public_member_api_docs, sort_constructors_first
import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:firebase_core/firebase_core.dart';
import 'package:google_sign_in/google_sign_in.dart';
import 'package:overlay_support/overlay_support.dart';
import 'package:todolist/services/databaseuser.dart';
import 'package:velocity_x/velocity_x.dart';

class LoginInWithEmailPassword {
  String email;
  String password;
  LoginInWithEmailPassword({
    required this.email,
    required this.password,
  });

  final auth = FirebaseAuth.instance;

  loginWithEmailPassword() {
    try {
      auth.signInWithEmailAndPassword(email: email, password: password);
    } catch (e) {
      showSimpleNotification("Invalid username or password".text.make());
    }
  }
}

class SignUpWithEmailAndPassword {
  String email;
  String password;
  String username;
  String phonenumber;
  SignUpWithEmailAndPassword({
    required this.email,
    required this.password,
    required this.username,
    required this.phonenumber,
  });

  DatabaseMethods databaseMethods = DatabaseMethods();

  signUpWithEmailAndPassword() {
    try {
      Map<String, dynamic> userInMap = {
        "username": username,
        "email": email,
        "phonenumber": phonenumber
      };

      databaseMethods.updoadUserInfo(userInMap);
    } catch (e) {}
  }
}

class AuthenticationServices {
  static Future<void> signInWithGoogle() async {
    DatabaseMethods databaseMethods = DatabaseMethods();
    try {
      final GoogleSignInAccount? googleUser = await GoogleSignIn().signIn();
      final FirebaseAuth auth = FirebaseAuth.instance;
      GoogleSignIn _googleSignIn = GoogleSignIn();


      bool isSignedIn = await _googleSignIn.isSignedIn();
      

      final GoogleSignInAuthentication? googleAuth =
          await googleUser?.authentication;
      print("waiting for authentication !!!!!!!!!!!!!!!!!!!1");
      final credential = GoogleAuthProvider.credential(
        accessToken: googleAuth?.accessToken,
        idToken: googleAuth?.idToken,
      );

      print("waiting for authentication !!!!!!!!!!!!!!!!!!!1");
      await FirebaseAuth.instance.signInWithCredential(credential);

      User? user = auth.currentUser;

      String? username = user!.displayName;
    

      databaseMethods.getUserByUsername(username).then((val) {return;});

      print("Creating user");

      Map<String, dynamic> userMap = {
        "name": user!.displayName,
        "email": user.email,
        "phonenumber": user.phoneNumber
      };

      databaseMethods.updoadUserInfo(userMap);
    } catch (e) {
      throw Exception(e.toString());
    }
  }
}
