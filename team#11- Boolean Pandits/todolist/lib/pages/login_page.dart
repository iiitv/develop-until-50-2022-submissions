import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/container.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:todolist/pages/sign_up.dart';
import 'package:todolist/services/authentication.dart';
import 'package:velocity_x/velocity_x.dart';

class LoginPage extends StatefulWidget {
  const LoginPage({super.key});

  @override
  State<LoginPage> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  String name = "";
  String email = "";
  bool changeButton = false;
  final _formKey = GlobalKey<FormState>();
  bool _obscureText = true;
  // bool isElevated = false;
  late TextEditingController _email = TextEditingController();
  late TextEditingController _password = TextEditingController();

  @override
  void initState() {
    _email = TextEditingController();
    _password = TextEditingController();
    super.initState();
  }

  @override
  void dispose() {
    _email.dispose();
    _password.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return SafeArea(
      child: Scaffold(
        body: SingleChildScrollView(
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              const SizedBox(
                height: 45,
              ),
              Text(
                "Let's Login Booloean",
                style: GoogleFonts.poppins(
                  fontSize: 30,
                  fontWeight: FontWeight.w600,
                  color: Colors.blue[800],
                ),
              ).px12(),
              const SizedBox(
                height: (6.94),
              ),
              Text(
                "And start your ToDo List !!",
                style: GoogleFonts.poppins(
                  fontWeight: FontWeight.w400,
                  fontSize: 20,
                  color: Colors.grey[500],
                ),
              ).px12(),
              const SizedBox(
                height: (35),
              ),
              Text(
                "Email Address",
                style: GoogleFonts.poppins(
                  fontWeight: FontWeight.w400,
                  fontSize: (17),
                  color: Colors.grey[500],
                ),
              ).px12().py12(),
              SizedBox(
                height: (50),
                child: TextField(
                  controller: _email,
                  enableSuggestions: false,
                  autocorrect: false,
                  keyboardType: TextInputType.emailAddress,
                  decoration: InputDecoration(
                    hintStyle: GoogleFonts.poppins(
                      color: Colors.grey[300],
                    ),
                    hintText: 'someone@gmail.com',
                    border: const OutlineInputBorder(
                      borderRadius: BorderRadius.all(
                        Radius.circular((6.94)),
                      ),
                    ),
                  ),
                ),
              ).px12(),
              const SizedBox(
                height: 20,
              ),
              Text(
                "Password",
                style: GoogleFonts.poppins(
                  fontWeight: FontWeight.w400,
                  fontSize: (17),
                  color: Colors.grey[500],
                ),
              ).px12().py12(),
              SizedBox(
                height: (50),
                child: TextField(
                  controller: _password,
                  enableSuggestions: false,
                  autocorrect: false,
                  decoration: InputDecoration(
                    hintStyle: GoogleFonts.poppins(
                      color: Colors.grey[300],
                    ),
                    suffixIcon: GestureDetector(
                      onTap: () {
                        setState(() {
                          _obscureText = !_obscureText;
                        });
                      },
                      child: Icon(_obscureText
                          ? Icons.visibility
                          : Icons.visibility_off),
                    ),
                    hintText: '***********',
                    border: const OutlineInputBorder(
                      borderRadius: BorderRadius.all(
                        Radius.circular((6.94)),
                      ),
                    ),
                  ),
                  obscureText: _obscureText,
                ),
              ).px12(),
              Row(
                mainAxisAlignment: MainAxisAlignment.end,
                children: [
                  TextButton(
                    onPressed: () {},
                    child: Text(
                      style: GoogleFonts.poppins(
                        color: Colors.blue[400],
                        decoration: TextDecoration.underline,
                        decorationThickness: 1.5,
                        fontSize: 15,
                      ),
                      "Forgot password?",
                    ),
                  ).px12()
                ],
              ),
              const SizedBox(
                height: 15,
              ),
              SizedBox(
                height: (45),
                child: OutlinedButton(
                  style: OutlinedButton.styleFrom(
                    backgroundColor: Colors.blue[400],
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular((20.86)),
                    ),
                  ),
                  onPressed: () async {
                    LoginInWithEmailPassword(
                            email: _email.toString(),
                            password: _password.toString())
                        .loginWithEmailPassword();
                  },
                  child: SizedBox(
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        const SizedBox(
                          width: (9.86),
                        ),
                        Text(
                          "Login",
                          style: GoogleFonts.poppins(
                            color: Colors.white,
                            fontSize: 17,
                            fontWeight: FontWeight.w500,
                          ),
                        ),
                        const Icon(
                          Icons.arrow_forward,
                          color: Colors.white,
                        ),
                      ],
                    ),
                  ),
                ),
              ).px12(),
              const SizedBox(
                height: 17,
              ),
              Center(
                child: Text(
                  'Or',
                  style: GoogleFonts.poppins(
                    color: Colors.grey[500],
                    fontSize: 15,
                    fontWeight: FontWeight.w600,
                  ),
                ),
              ),
              const SizedBox(
                height: 10,
              ),
              SizedBox(
                height: 40,
                child: OutlinedButton(
                  style: OutlinedButton.styleFrom(
                    side: const BorderSide(
                      color: Color.fromARGB(255, 219, 219, 219),
                      width: 1.2,
                    ),
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular((28)),
                    ),
                  ),
                  // need to add google sign in
                  onPressed: () async {},
                  child: Container(
                    padding: const EdgeInsets.only(
                      left: (13.2),
                    ),
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: [
                        const Image(
                          height: (30),
                          width: (20),
                          image: AssetImage('assets/images/google.png'),
                        ),
                        const SizedBox(
                          width: (12),
                        ),
                        Text(
                          "Login with Google",
                          style: GoogleFonts.poppins(
                            color: Colors.blue[500],
                            fontSize: (17),
                            fontWeight: FontWeight.w500,
                          ),
                        ),
                      ],
                    ),
                  ),
                ),
              ).px12(),
              const SizedBox(
                height: (14),
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text(
                    style: GoogleFonts.poppins(
                      color: Colors.grey[500],
                      fontSize: (15),
                      fontWeight: FontWeight.w500,
                    ),
                    'Not Registered yet?',
                  ),
                  TextButton(
                    onPressed: () async {
                      Navigator.push(context,
                          MaterialPageRoute(builder: (context) => SignUp()));
                    },
                    child: Text(
                      style: GoogleFonts.poppins(
                        color: Colors.blue[800],
                        fontSize: (15),
                        fontWeight: FontWeight.w500,
                      ),
                      'Register here!',
                    ),
                  ),
                ],
              ),
            ],
          ),
        ),
      ),
    );
  }
}
