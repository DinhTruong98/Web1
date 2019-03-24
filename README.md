# Exercises 02
> Các thư viện và các kĩ thuật để log lại file trong nodejs

### Các thư viện
- Thư viện có sẵn của nodejs (console)
- Thư viện Debug
- thư viện Winston
- Thư viện Trace

### Các kĩ thuật log lỗi
- Sử dụng console:
    - console.log('Lôi')
    - console.error(loi)
    > kém hiệu quả
- Sử dụng thư viện Debug:
    - Cài đặt : npm install debug --save
    - Sau đó thêm dòng: 
    > const debug = require('debug')('my-namespace')
    > const name = 'my-app'
    > debug('booting %s', name)
    - Chọn app của mình để enable: DEBUG=my-namespace node app.js
- Sử dụng WistonWiston
    - >npm install winston --save
    - >const winston = require('winston') winston.log('info', 'Hello log files!', { someKey: 'some-value'})
