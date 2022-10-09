import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/container.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:todolist/pages/login_page.dart';

class SignUp extends StatefulWidget {
  const SignUp({super.key});

  @override
  State<SignUp> createState() => _SignUpState();
}

class _SignUpState extends State<SignUp> {
  bool _obscureText = true;
  late final TextEditingController _email;
  late final TextEditingController _password;
  late final TextEditingController _username;
  late final TextEditingController _phonenumber;

  @override
  void initState() {
    _email = TextEditingController();
    _password = TextEditingController();
    _username = TextEditingController();
    _phonenumber = TextEditingController();

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
    return Scaffold(
      body: Container(
        padding: const EdgeInsets.only(top: (30)),
        child: Padding(
          padding: const EdgeInsets.all(2.0),
          child: SingleChildScrollView(
            child: Container(
              padding: const EdgeInsets.only(left: (13.2)),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  const SizedBox(
                    height: (42),
                  ),
                  Text(
                    "Register",
                    style: GoogleFonts.poppins(
                      fontSize: (22.24),
                      fontWeight: FontWeight.w600,
                      color: Colors.blue[800],
                    ),
                  ),
                  const SizedBox(
                    height: (6.94),
                  ),
                  Text(
                    "To get in touch with your ToDo List",
                    style: GoogleFonts.poppins(
                      fontWeight: FontWeight.w400,
                      fontSize: (15),
                      color: Colors.grey[500],
                    ),
                  ),
                  const SizedBox(
                    height: (14),
                  ),
                  Padding(
                    padding: const EdgeInsets.only(
                      top: (14),
                      right: (13.2),
                    ),
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(
                          "Username",
                          style: GoogleFonts.poppins(
                            fontWeight: FontWeight.w400,
                            fontSize: (15),
                            color: Colors.grey[500],
                          ),
                        ),
                        const SizedBox(
                          height: (10.41),
                        ),
                        SizedBox(
                          height: (50),
                          child: TextField(
                            controller: _username,
                            enableSuggestions: false,
                            autocorrect: false,
                            keyboardType: TextInputType.name,
                            decoration: InputDecoration(
                              hintStyle: GoogleFonts.poppins(
                                color: Colors.grey[500],
                              ),
                              hintText: 'What should we call you ?',
                              border: const OutlineInputBorder(
                                borderRadius: BorderRadius.all(
                                  Radius.circular((6.94)),
                                ),
                              ),
                            ),
                          ),
                        ),
                        const SizedBox(
                          height: (10.41),
                        ),
                        Text(
                          "Email Address",
                          style: GoogleFonts.poppins(
                            fontWeight: FontWeight.w400,
                            fontSize: (15),
                            color: Colors.grey[500],
                          ),
                        ),
                        const SizedBox(
                          height: (10.41),
                        ),
                        SizedBox(
                          height: (50),
                          child: TextField(
                            controller: _email,
                            enableSuggestions: false,
                            autocorrect: false,
                            keyboardType: TextInputType.emailAddress,
                            decoration: InputDecoration(
                              hintStyle: GoogleFonts.poppins(
                                color: Colors.grey[500],
                              ),
                              hintText: 'someone@gmail.com',
                              border: const OutlineInputBorder(
                                borderRadius: BorderRadius.all(
                                  Radius.circular((6.94)),
                                ),
                              ),
                            ),
                          ),
                        ),
                        const SizedBox(
                          height: (27.8),
                        ),
                        Text(
                          "Password",
                          style: GoogleFonts.poppins(
                            fontWeight: FontWeight.w400,
                            fontSize: (15),
                            color: Colors.grey[500],
                          ),
                        ),
                        const SizedBox(
                          height: (10.41),
                        ),
                        SizedBox(
                          height: (50),
                          child: TextField(
                            controller: _password,
                            enableSuggestions: false,
                            autocorrect: false,
                            decoration: InputDecoration(
                              hintStyle: GoogleFonts.poppins(
                                color: Colors.grey[500],
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
                        ),
                        const SizedBox(
                          height: (27.8),
                        ),
                        Text(
                          "Phone Number",
                          style: GoogleFonts.poppins(
                            fontWeight: FontWeight.w400,
                            fontSize: (15),
                            color: Colors.grey[500],
                          ),
                        ),
                        const SizedBox(
                          height: (10.41),
                        ),
                        SizedBox(
                          height: (50),
                          child: TextField(
                            controller: _phonenumber,
                            enableSuggestions: false,
                            autocorrect: false,
                            keyboardType: TextInputType.phone,
                            decoration: InputDecoration(
                              hintStyle: GoogleFonts.poppins(
                                color: Colors.grey[500],
                              ),
                              hintText: '',
                              border: const OutlineInputBorder(
                                borderRadius: BorderRadius.all(
                                  Radius.circular((6.94)),
                                ),
                              ),
                            ),
                          ),
                        ),
                        const SizedBox(
                          height: (42),
                        ),
                        SizedBox(
                          width: (328.7),
                          height: (34.7),
                          child: OutlinedButton(
                            style: OutlinedButton.styleFrom(
                              backgroundColor: Colors.blue[800],
                              shape: RoundedRectangleBorder(
                                borderRadius: BorderRadius.circular(30),
                              ),
                            ),
                            onPressed: () async {},
                            child: SizedBox(
                              child: Row(
                                mainAxisAlignment:
                                    MainAxisAlignment.spaceBetween,
                                children: [
                                  SizedBox(
                                    width: (9.86),
                                  ),
                                  Text(
                                    "Register",
                                    style: GoogleFonts.poppins(
                                      color: Colors.white,
                                      fontSize: (12.51),
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
                        ),
                        SizedBox(
                          height: (27.76),
                        ),
                        Row(
                          mainAxisAlignment: MainAxisAlignment.center,
                          children: [
                            Text(
                              style: GoogleFonts.poppins(
                                color: Colors.grey[500],
                                fontSize: (10.42),
                                fontWeight: FontWeight.w500,
                              ),
                              'Already Registered?',
                            ),
                            TextButton(
                              onPressed: () {
                                Navigator.push(
                                    context,
                                    MaterialPageRoute(
                                        builder: (context) =>
                                            const LoginPage()));
                              },
                              child: Text(
                                style: GoogleFonts.poppins(
                                  color: Colors.blue[800],
                                  fontSize: (10.42),
                                  fontWeight: FontWeight.w500,
                                ),
                                'Login here!',
                              ),
                            ),
                          ],
                        ),
                      ],
                    ),
                  )
                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}
