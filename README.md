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
    - Sau đó thêm dòng: > const debug = require('debug')('my-namespace') const name = 'my-app'
    > debug('booting %s', name)
    - Chọn app của mình để enable: DEBUG=my-namespace node app.js
- Sử dụng WistonWiston
    - >npm install winston --save
    - level: 'info': chỉ log lại các log từ info trở lại (tức là chỉ log các message error, warn, info; các message verbose, debug, silly sẽ bị bỏ qua)
    - format: winston.format.json() : thông tin log sẽ được ghi lại dưới định dạng json
    - transports: định nghĩa đầu ra cho log:
    - new winston.transports.File(): ghi log ra file (các level log trong transports sẽ ghi đè nên level log mặc định)
    - { filename: 'error.log', level: 'error' }: ghi các message log từ error vào file error.log
    - { filename: 'info.log', level: 'info' }: ghi các message info, warn, error ra file info.log
    - { filename: 'combined.log' }: ghi tất cả các thông tin log ra file combined.log
    - new winston.transports.Console: ghi thông tin log ra màn hình console, vì ta chỉ thực hiện xem log trên console khi thực hiện - test, nên sẽ kiểm tra nếu không phải là môi trường production thì mới ghi log ra console.
