public function index()
{
    $email = $this->input->get('email');

    // Generate a random token
    $token = md5(uniqid());

    // Store the token in the database
    $this->db->set('token', $token);
    $this->db->where('email', $email);
    $this->db->update('users');

    // Send an email to the user
    $this->load->library('email');
    $this->email->from('noreply@example.com', 'CodeIgniter');
    $this->email->to($email);
    $this->email->subject('Reset Password');
    $this->email->message('
        Click on the following link to reset your password:
        http://example.com/reset-password?token=' . $token);
    $this->email->send();

    // Redirect the user to the login page
    redirect('login');
}