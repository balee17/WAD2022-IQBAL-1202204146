import fs from 'fs';
import { db } from '../database/connect';

// Read and execute the SQL query in ./sql/articles.sql
db.exec(fs.readFileSync(process.cwd() + '/database/seeder-query.sql').toString());
