<form action={{'site.contact'}} method="POST" >
  @csrf
  <input name="name" type="text" placeholder="Name" class={{ $class }}>
  <br>
  <input name="phone" type="text" placeholder="Phone" class={{ $class }}>
  <br>
  <input name="email" type="text" placeholder="E-mail" class={{ $class }}>
  <br>
  <select name="motive" class={{ $class }}>
      <option value="">Contact motive?</option>
      <option value="">Doubt</option>
      <option value="">Complement</option>
      <option value="">Complain</option>
  </select>
  <br>
  <textarea name="message" class={{ $class }}>Type here your message</textarea>
  <br>
  <button type="submit" class={{ $class }}>SEND</button>
</form>