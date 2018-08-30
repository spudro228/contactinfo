Поднять очереди:

```Для посгреса: CREATE EXTENSION IF NOT EXISTS "uuid-ossp";```

```./bin/console enqueue:consume --setup-broker -vvv```