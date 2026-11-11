function validateForm() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let department = document.getElementById("department").value;
    let designation = document.getElementById("designation").value.trim();
    let salary = document.getElementById("salary").value;

    if (name === "") {
        alert("Please enter employee name");
        return false;
    }

    if (email === "") {
        alert("Please enter email");
        return false;
    }

    if (phone === "") {
        alert("Please enter phone number");
        return false;
    }

    if (department === "") {
        alert("Please select department");
        return false;
    }

    if (salary === "") {
        alert("Please enter salary");
        return false;
    }

    return true;
}