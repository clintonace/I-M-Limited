<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Floating Cards Layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0; padding:0; font-family:Arial, Helvetica, sans-serif; background:#f4f6f9;">

<section style="width:100%; min-height:100vh; display:flex; align-items:center; justify-content:center;">

    <!-- OUTER WRAPPER -->
    <div style="width:90%; max-width:1200px; position:relative;">

        <!-- BLUE MAIN CARD -->
        <div style="background:#2f80ed; border-radius:30px; padding:80px 60px; position:relative; min-height:650px; display:flex; align-items:center; justify-content:flex-end;">

            <!-- PROFILE IMAGE -->
            <div style="position:absolute; bottom:0; right:60px;">
                <img src="your-image.png" alt="Profile"
                     style="height:550px; object-fit:contain;">
            </div>

        </div>

        <!-- TOP FLOATING CARD (OUTSIDE BLUE BOX) -->
        <div style="position:absolute; top:-60px; left:50%; transform:translateX(-50%); background:#ffffff; width:430px; border-radius:20px; padding:25px; box-shadow:0 30px 60px rgba(0,0,0,0.15); z-index:10;">

            <div style="display:flex; align-items:center; margin-bottom:15px;">
                <div style="width:45px; height:45px; border-radius:50%; background:#ddd; margin-right:12px;"></div>
                <div style="font-weight:bold; font-size:18px;">Denis Policarpo Campos</div>
            </div>

            <div style="color:#16a34a; font-weight:bold; font-size:20px; margin-bottom:10px;">
                ↑ Work time
            </div>

            <div style="color:#555; font-size:15px; line-height:1.6;">
                Average last week is 
                <span style="color:#16a34a; font-weight:bold;">61% higher</span> 
                than their own average over the previous 3 weeks.
            </div>
        </div>

        <!-- LEFT FLOATING STATS CARD -->
        <div style="position:absolute; left:-80px; top:50%; transform:translateY(-50%); background:#ffffff; width:260px; border-radius:20px; box-shadow:0 30px 60px rgba(0,0,0,0.15); overflow:hidden; z-index:10;">

            <!-- Time -->
            <div style="padding:20px; border-bottom:1px solid #eee;">
                <div style="color:#444; font-weight:bold; margin-bottom:8px;">Time</div>
                <div style="display:flex; justify-content:space-between;">
                    <span style="font-size:20px; font-weight:bold;">44:27</span>
                    <span style="color:#16a34a; font-weight:bold;">↑ 2:20</span>
                </div>
            </div>

            <!-- Activity -->
            <div style="padding:20px; border-bottom:1px solid #eee;">
                <div style="color:#444; font-weight:bold; margin-bottom:8px;">Activity</div>
                <div style="display:flex; justify-content:space-between;">
                    <span style="background:#dcfce7; color:#16a34a; padding:6px 12px; border-radius:20px; font-weight:bold;">74%</span>
                    <span style="color:#ef4444; font-weight:bold;">↓ 3%</span>
                </div>
            </div>

            <!-- Core Work -->
            <div style="padding:20px;">
                <div style="color:#444; font-weight:bold; margin-bottom:8px;">Core work</div>
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <span style="width:48px; height:48px; border-radius:50%; border:4px solid #2f80ed; display:flex; align-items:center; justify-content:center; font-weight:bold; color:#2f80ed;">
                        41
                    </span>
                    <span style="color:#ef4444; font-weight:bold;">↓ 3%</span>
                </div>
            </div>

        </div>

    </div>

</section>

</body>
</html>
