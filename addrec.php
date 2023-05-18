<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="addrec.css" />

    <!----===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <title>Regisration Form</title>
  </head>

  <body>
    <!-- navigation bar -->
    <nav class="nav">
      <a href="#" class="brand-name">Barangay 48, Pasay City</a>
      <ul class="nav-links">
        <!-- pabago nalang href -->
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Application</a></li>
        <li><a href="#">List</a></li>
      </ul>
      <img
        class="logo-png"
        href="#"
        src="/pasay-logo-small.png"
        alt="PasayLogo"
        id="brngyPic"
      />
    </nav>

    <div class="container">
      <header>Registration</header>

      <form action="#">
        <div class="form first">
          <div class="details personal">
            <span class="title">Personal Details</span>

            <div class="fields">
              <div class="input-field">
                <label>First Name</label>
                <input
                  type="text"
                  placeholder="Enter your first name"
                  required
                  value="<?php if (isset($_GET['FirstName']))
                                                                                        echo ($_GET['FirstName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Middle Name</label>
                <input
                  type="text"
                  placeholder="Enter middle name"
                  required
                  value="<?php if (isset($_GET['MiddleName']))
                                                                                    echo ($_GET['MiddleName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Last Name</label>
                <input
                  type="text"
                  placeholder="Enter your last name"
                  required
                  value="<?php if (isset($_GET['LastName']))
                                                                                      echo ($_GET['LastName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Age</label>
                <input
                  type="number"
                  placeholder="Enter age"
                  required
                  value="<?php if (isset($_GET['Agee']))
                                                                              echo ($_GET['Agee']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Gender</label>
                <select>
                  <option disabled selected>Select gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>
              </div>

              <div class="input-field">
                <label>Birth Date</label>
                <input
                  type="date"
                  required
                  value="<?php if (isset($_GET['BirthDatee']))
                                                    echo ($_GET['BirthDatee']); ?>"
                />
              </div>
            </div>
          </div>
          <!-- di ko lang sure dito sa mga id so di ko muna nilagay yung php thingy -->
          <!-- part 2 -->
          <div class="details ID">
            <span class="title">Identity Details</span>

            <div class="fields">
              <div class="input-field">
                <label>ID Type</label>
                <select>
                  <option disabled selected>Select Valid ID</option>
                  <option>Senior Citizen ID</option>
                  <option>Driver's License</option>
                  <option>Passport</option>
                  <option>SSS</option>
                </select>
              </div>

              <div class="input-field">
                <label>ID Number</label>
                <input type="text" placeholder="Enter ID number" />
              </div>

              <div class="input-field">
                <label>Issued Name</label>
                <input type="text" placeholder="Enter issued name" />
              </div>

              <div class="input-field">
                <label>Issued State</label>
                <input type="text" placeholder="Enter issued state" />
              </div>

              <div class="input-field">
                <label>Issued Date</label>
                <input type="date" />
              </div>

              <div class="input-field">
                <label>Expiry Date</label>
                <input type="date" />
              </div>
            </div>
          </div>
        </div>

        <!-- secondz -->
        <div class="form second">
          <div class="details address">
            <span class="title">Address Details</span>

            <div class="fields">
              <div class="input-field">
                <label>Address Type</label>
                <input
                  type="text"
                  placeholder="Permanent or Temporary"
                  value="<?php
                                                                              if (isset($_GET['AddressType']))
                                                                                echo ($_GET['AddressType']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Nationality</label>
                <input
                  type="text"
                  placeholder="Enter nationality"
                  value="<?php
                                                                        if (isset($_GET['Nationality']))
                                                                          echo ($_GET['Nationality']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Province</label>
                <input
                  type="text"
                  placeholder="Enter your province"
                  value="<?php
                                                                          if (isset($_GET['Province']))
                                                                            echo ($_GET['Province']); ?>"
                />
              </div>

              <div class="input-field">
                <label>City</label>
                <input
                  type="text"
                  placeholder="Enter your city"
                  value="<?php
                                                                      if (isset($_GET['City']))
                                                                        echo ($_GET['City']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Street</label>
                <input
                  type="number"
                  placeholder="Enter block street name"
                  value="<?php
                                                                                if (isset($_GET['StreetName']))
                                                                                  echo ($_GET['StreetName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>House Number</label>
                <input
                  type="number"
                  placeholder="Enter house number"
                  value="<?php
                                                                            if (isset($_GET['HouseNum']))
                                                                              echo ($_GET['HouseNum']); ?>"
                />
              </div>
            </div>
          </div>

          <div class="details family">
            <span class="title">Emergency Contact</span>

            <div class="fields">
              <div class="input-field">
                <label>Father Name</label>
                <input
                  type="text"
                  placeholder="Enter father name"
                  value="<?php
                                                                        if (isset($_GET['FatherName']))
                                                                          echo ($_GET['FatherName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Mother Name</label>
                <input
                  type="text"
                  placeholder="Enter mother name"
                  value="<?php
                                                                        if (isset($_GET['MotherName']))
                                                                          echo ($_GET['MotherName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Emergency Contact Number</label>
                <input
                  type="text"
                  placeholder="Enter contact number"
                  value="<?php
                                                                            if (isset($_GET['emergencyCN']))
                                                                              echo ($_GET['emergencyCN']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Name of Contact</label>
                <input
                  type="text"
                  placeholder="Enter name of contact"
                  value="<?php
                                                                            if (isset($_GET['SpouseName']))
                                                                              echo ($_GET['SpouseName']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Relationship</label>
                <input
                  type="text"
                  placeholder="Enter relationship"
                  value="<?php
                                                                          if (isset($_GET['RelationshipEC']))
                                                                            echo ($_GET['RelationshipEC']); ?>"
                />
              </div>

              <div class="input-field">
                <label>Blood Type</label>
                <input
                  type="text"
                  placeholder="Enter blood type"
                  value="<?php
                                                                        if (isset($_GET['BloodType']))
                                                                          echo ($_GET['BloodType']); ?>"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="form third">
          <div class="details ID">
            <span class="title">Identification</span>

            <div class="fields">
              <div class="input-field-img">
                <label>Upload your Image</label>
                <input class="img-select" type="file" required />
              </div>
            </div>
          </div>

          <div class="buttons">
            <button class="sumbit">
              <span class="btnText">Submit</span>
              <i class="uil uil-navigator"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
