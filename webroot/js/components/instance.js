const instance = axios.create({
  baseURL: root,
  timeout: 1000,
  headers: {'X-CSRF-Token' : token}
});
