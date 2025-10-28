<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HIMA MI UPI YPTK Padang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            display: flex;
            width: 900px;
            height: 550px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .left-panel {
            flex: 1;
            background: linear-gradient(rgba(26, 42, 108, 0.8), rgba(26, 42, 108, 0.8)), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80') center/cover;
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .org-info {
            text-align: center;
        }
        
        .org-logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            color: #1a2a6c;
        }
        
        .org-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .org-info p {
            font-size: 16px;
            line-height: 1.6;
        }
        
        .features {
            margin-top: 30px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .feature i {
            margin-right: 10px;
            color: #fdbb2d;
        }
        
        .right-panel {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h2 {
            color: #1a2a6c;
            font-size: 28px;
        }
        
        .login-header p {
            color: #777;
            margin-top: 10px;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }
        
        .input-group input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .input-group input:focus {
            border-color: #1a2a6c;
            outline: none;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .remember {
            display: flex;
            align-items: center;
        }
        
        .remember input {
            margin-right: 5px;
        }
        
        .forgot a {
            color: #1a2a6c;
            text-decoration: none;
        }
        
        .forgot a:hover {
            text-decoration: underline;
        }
        
        .btn-login {
            width: 100%;
            padding: 15px;
            background: #1a2a6c;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .btn-login:hover {
            background: #25368f;
        }
        
        .separator {
            text-align: center;
            margin: 25px 0;
            position: relative;
        }
        
        .separator:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #ddd;
        }
        
        .separator span {
            background: white;
            padding: 0 15px;
            position: relative;
            color: #777;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        
        .facebook {
            background: #3b5998;
        }
        
        .google {
            background: #dd4b39;
        }
        
        .register {
            text-align: center;
            font-size: 14px;
        }
        
        .register a {
            color: #1a2a6c;
            text-decoration: none;
            font-weight: 600;
        }
        
        .register a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
                width: 100%;
            }
            
            .left-panel {
                display: none;
            }
            
            .right-panel {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="org-info">
                <div class="org-logo">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h2>HIMPUNAN MAHASISWA</h2>
                <h2>MANAJEMEN INFORMATIKA</h2>
                <p>Fakultas Ilmu Komputer</p>
                <p>UPI YPTK Padang</p>
            </div>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Manajemen Kegiatan dan Event</span>
                </div>
                <div class="feature">
                    <i class="fas fa-users"></i>
                    <span>Manajemen Keanggotaan</span>
                </div>
                <div class="feature">
                    <i class="fas fa-file-alt"></i>
                    <span>Arsip Dokumen Organisasi</span>
                </div>
                <div class="feature">
                    <i class="fas fa-comments"></i>
                    <span>Forum Diskusi Internal</span>
                </div>
                <div class="feature">
                    <i class="fas fa-tasks"></i>
                    <span>Manajemen Proyek dan Tugas</span>
                </div>
            </div>
        </div>
        
        <div class="right-panel">
            <div class="login-header">
                <h2>Masuk ke Sistem</h2>
                <p>Silakan masukkan kredensial Anda untuk mengakses sistem</p>
            </div>
            
            <form>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="NIM atau Username" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <div class="forgot">
                        <a href="#">Lupa password?</a>
                    </div>
                </div>
                
                <button type="submit" class="btn-login">Masuk</button>
            </form>
            
            <div class="separator">
                <span>Atau masuk dengan</span>
            </div>
            
            <div class="social-login">
                <div class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="social-btn google">
                    <i class="fab fa-google"></i>
                </div>
            </div>
            
            <div class="register">
                <p>Belum punya akun? <a href="#">Daftar sebagai anggota</a></p>
            </div>
        </div>
    </div>

    <script>
        // Simple form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.querySelector('input[type="text"]').value;
            const password = document.querySelector('input[type="password"]').value;
            
            if(username === '' || password === '') {
                alert('Username dan password harus diisi!');
                return;
            }
            
            // Simulasi login berhasil
            alert('Login berhasil! Redirecting...');
            // Redirect would happen here in a real application
        });
        
        // Social login buttons
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const platform = this.classList.contains('facebook') ? 'Facebook' : 'Google';
                alert(`Login dengan ${platform} akan ditangani oleh sistem.`);
            });
        });
    </script>
</body>
</html>