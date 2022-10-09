// ignore_for_file: public_member_api_docs, sort_constructors_first
import 'package:firebase_auth/firebase_auth.dart';
import 'package:overlay_support/overlay_support.dart';
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


class SignUpWithEmailAndPassword{

  
}
