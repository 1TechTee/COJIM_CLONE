<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COJIM_TESTIMONIES</title>
</head>
<?php
// submit_testimony.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Share Your Testimony – COJIM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="/COJIM_CLONE/images/COJIM/logo.png" rel="icon" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="/COJIM_CLONE/css/bootstrap.min.css">
    <link rel="stylesheet" href="/COJIM_CLONE/css/style.css">
    <link rel="stylesheet" href="/COJIM_CLONE/css/vendor.css">
</head>

<body>

    <!-- ✅ NAVBAR -->
    <?php include("partials/navbar.php"); ?> <br><br><br>

    <!-- ✅ Static Encouraging Testimonies -->
    <section class="container py-5 mt-5" style="margin-top: 550px;">
        <h2 class="text-center mb-4" style="color: white;">Your present situation is nothing but a mere challenge to God ~Christopher Orji</h2>

        <div class="row">
            <!-- Testimony 1 -->
            <div class="col-md-6 mb-4">
                <div class="p-3 bg-light border rounded h-100 text-center">
                    <img src="/COJIM_CLONE/images/COJIM/spanish_couple_testimony.jpg"
                        alt="Esther's Testimony" class="img-fluid rounded mb-3" style="max-height: 200px; object-fit: cover;">
                    <h4>17 YEARS OF BARRENESS BROKEN BY GOD'S POWER</h4>
                    <p><strong>Mr. & Mrs. Wilson:</strong> On Sunday, February 2, 2025, during the live service at the City of Jesus International Ministry, we shared how God's mercy rewrote our story. For 17 years, we struggled to conceive and battled personal and spiritual challenges that nearly destroyed our peace, family, and future.

                        I, Mr. Wilson, testified about my past life of sin that negatively impacted my career, home, and walk with God. My wife, Samantha, bravely shared how she grew up in an environment influenced by her father, a herbalist, and how she was exposed to deep spiritual darkness — from fornication and deception to disturbing dreams and oppression by a spiritual husband.

                        Despite these strongholds, our hearts longed for freedom and restoration. Through online prayers with God’s Choice Servant Christopher Orji, the hand of God touched our lives. My wife miraculously conceived, and today we are blessed with a healthy 20-month-old child!

                        We are living proof that Jesus still delivers, restores, and gives joy to those who seek Him in faith. To God alone be all the glory!</p>

                </div>
            </div>

            <!-- Testimony 2 -->
            <div class="col-md-6 mb-4">
                <div class="p-3 bg-light border rounded h-100 text-center">
                    <img src="/COJIM_CLONE/images/COJIM/mr_chinedu.jpg" alt="Daniel's Testimony" class="img-fluid rounded mb-3" style="max-height: 200px; object-fit: cover;">
                    <h4>TOTAL HEALING FROM KIDNEY FAILURE!</h4>
                    <p><strong>Mr. Chinedu Onyebuchi:</strong> I’m a devoted worker and aluminum fabricator from Enugu State. In January 2025, I was struck by a sudden illness that led to severe diarrhea and a diagnosis of kidney failure. My condition grew worse even after multiple hospital visits. At a critical point, the dialysis machine malfunctioned, and doctors suggested a risky alternative treatment that could have affected my heart.

                        But I chose to trust God completely. Through the support and prayers of God’s Choice Servant, Christopher Orji, and the love shown by the City of Jesus International Ministry, I experienced a supernatural turnaround. My electrolytes stabilized, my health improved, and I was discharged.

                        Beyond healing, the Man of God blessed me with ₦1.5 million to cover my hospital bills and more. My wife and I are overwhelmed with gratitude. Truly, Jesus still heals, provides, and honors those who trust in Him. Shalom!</p>

                </div>
            </div>
        </div>



    </section>

    <!-- ✅ Testimony Submission Form -->
    <section class="container py-5">
        <h2 class="text-center mb-4" style="color: white;">Rev 12:11- we overcome by the blood of the lamb and the words of our testimonies <br> <br> SHARE YOUR TESTIMONIES BELOW</h2>
        <form action="process_testimony.php" method="POST" enctype="multipart/form-data" class="bg-white p-4 border rounded">

            <div class="mb-3">
                <label for="name" class="form-label">FullName:</label>
                <input type="text" name="name" id="name" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" name="phone" id="phone" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="share_live" class="form-label">Do you want to share your testimony live?</label>
                <select name="share_live" id="share_live" class="form-select" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="prayer_date" class="form-label">Date you received prayer at the City of Jesus International ministry:</label>
                <input type="date" name="prayer_date" id="prayer_date" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">Testimony Summary:</label>
                <textarea name="summary" id="summary" class="form-control" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="attachment" class="form-label">Upload a Picture or Document (optional):</label>
                <input type="file" name="attachment" id="attachment" class="form-control" accept=".jpg,.jpeg,.png,.pdf" />
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit Testimony</button>
        </form>
    </section>

    <!-- ✅ FOOTER -->
    <?php include("partials/footer.php"); ?>

    <!-- ✅ JavaScript Files -->
    <script src="/COJIM_CLONE/js/jquery.min.js"></script>
    <script src="/COJIM_CLONE/js/bootstrap.bundle.min.js"></script>
    <script src="/COJIM_CLONE/js/custom.js"></script>
    <!-- Add other JS files as needed -->
</body>

</html>

</html>