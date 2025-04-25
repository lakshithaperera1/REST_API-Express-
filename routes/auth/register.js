router.post('/register', async (req, res) => {
    const { username, email, password } = req.body;
    const user = await User.create({ username, email, password });
    res.status(201).json({
      _id: user._id,
      username: user.username,
      email: user.email,
      token: generateToken(user._id)
    });
  });