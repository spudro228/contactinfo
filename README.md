Поднять очереди:

В .end установить ``ENQUEUE_DSN`` равный ``DATABASE_URL``

```Для посгреса: CREATE EXTENSION IF NOT EXISTS "uuid-ossp";```

```./bin/console enqueue:consume --setup-broker -vvv```