 Features
- User Authentication: Ensures that only authorized individuals can access specific modules.
- Role-Based Access Control: Restricts access to modules based on user roles (Administrator, Faculty/Teacher, Student).
- Administrator Module:
  - Authentication: Requires valid username and password for access.
  - Students Details:
    - Manages personal and academic details of students.
    - Allows addition of students and viewing of all student details.
  - Staff Details:
    - Manages information about staff members, including class details.
    - Enables addition of teachers and viewing of staff details.
  - Attendance Details:
    - Stores attendance records for all students.
  - Report Details:
    - Individual Report: Allows viewing of attendance report details for a particular student.
    - Mass Report: Enables viewing of attendance report details for an entire class on a specific date.
- Faculty/Teacher Module:
  - Authentication: Requires valid username and password for access.
  - Students Details:
    - Add Student: Allows addition of students with their respective details.
    - Update Student Account: Permits updating of student information.
    - View Student: Allows viewing of all students belonging to any class with their details.
  - Attendance Details:
    - Take Attendance: Assists teachers in marking attendance for their respective classes on specific dates.
  - Report Details:
    - Individual Report: Enables viewing of attendance report details for a particular student.
    - Mass Report: Facilitates viewing of attendance report details for an entire class on a specific date.
- Student Module:
  - Authentication: Requires valid username and password for access.
  - Report Details:
    - Allows students to view their individual attendance report details for any class by providing their register number.

 Technologies Used
- HTML, CSS, Bootstrap: Frontend development.
- PHP: Backend scripting.
- JavaScript: Client-side interactions.
- MySQL: Database management.
- XAMPP: Local server environment.
- Apache Server: Serves the web application.

 Installation
1. Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Clone this repository to your local machine or download the zip file and extract it.
3. Place the project folder in the `htdocs` directory of your XAMPP installation.
4. Start the Apache and MySQL services in XAMPP control panel.
5. Import the MySQL database schema provided in the `database` folder to create the necessary tables.
6. Open your web browser and navigate to `http://localhost/attendance-management-system` to access the application.

Usage
1. Register an account or login with your credentials based on your role (Administrator, Faculty/Teacher, or Student).
2. Access modules based on your role and perform respective tasks such as managing students/staff, taking attendance, or viewing reports.

Contributing
Contributions are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

